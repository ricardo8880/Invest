<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Faker\Extension\Extension;

class appController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        /*
        //$select = DB::select("select * from users where id = '1'");
        //$user = User::get();
        $user_acao = DB::select("

        select u.id, u.name, ac.nome, ac.valor from users u 
        inner join user_acao ua on u.id = ua.id_user
        inner join acoes ac on ac.id_acao = ua.id_acao    
        
        ");

        return view('index', ['user_acao' => $user_acao]);*/
        return view('index');
    }

    public function cadastrarAcao()
    {
        return view('cadastro.cadastrar_acao');
    }

    public function cadastroFeito(Request $request)
    {
        $user = auth()->user();

        $nome = $request->nome;
        $ultimo = $request->ultimo;
        $maximo = $request->maximo;
        $minimo = $request->minimo;
        $variacao = $request->variacao;
        $var = $request->var;
        $vol = $request->vol;
        $valor = $request->valor;
        
        

        $image = $request->image;
        $extension = $image->extension();
        $imageName = md5($image->getClientOriginalName()) . '.' . $extension;
        
        move_uploaded_file($_FILES['image']['tmp_name'], public_path('img_acao') . '/' . $imageName);




        DB::table('acoes')->insert([
            'nome' => $nome,
            'ultimo' => $ultimo,
            'maximo' => $maximo,
            'minimo' => $minimo,
            'variacao' => $variacao,
            'var' => $var,
            'vol' => $vol,
            'image' => $imageName,
            'valor' => $valor
        ]);
        $id_acao = DB::getPdo()->lastInsertId();
        
        DB::insert("
            insert into user_acao (id_user, id_acao)
            values
            ('$user->id', $id_acao)
        ");


    
        return redirect('/acoes');
    }

    public function acoes(){
        $user = auth()->user();

        $acoes = DB::select("
            select * from acoes
        ");

        return view('acoes.acoes', ['acoes' => $acoes]);

    }

    public function acao($id){
                
        $acao = DB::select("
            select * from acoes where id_acao = '$id'
        ");

        return view('/acoes/acao', ['acao' => $acao]);
    }

    public function anunciados(){
        $user = auth()->user();
        $userName = $user->name;

        
        $minhasAcoes = DB::select("
            select u.id, u.name, ac.id_acao, ac.nome, ac.ultimo, ac.maximo, ac.minimo, ac.variacao, ac.var, ac.vol, ac.image, ac.valor
            from users u 
            inner join user_acao ua on u.id = ua.id_user
            inner join acoes ac on ua.id_acao = ac.id_acao  
            where u.id = $user->id
        ");

        return view('/acoes/anuncio_acoes', ['minhasAcoes' => $minhasAcoes, 'userName' => $userName]);
    }

    public function deletar($id){
        DB::delete("
            delete from acoes where id_acao = $id
        ");
        echo "<script>location.href='/anuncio_acoes'</script>";
    }
    public function update(Request $request ,$id){

        
        $nome = $request->nome;
        $ultimo = $request->ultimo;
        $maximo = $request->maximo;
        $minimo = $request->minimo;
        $variacao = $request->variacao;
        $var = $request->var;
        $vol = $request->vol;
        $valor = $request->valor;
    
      
        $image = $request->image;
        $extension = $image->extension();
        $imageName = md5($image->getClientOriginalName()) . '.' . $extension;
        
        move_uploaded_file($_FILES['image']['tmp_name'], public_path('img_acao') . '/' . $imageName);
 


        $imagens = DB::select("
            select ac.image from acoes ac
        ");
        unlink($_SERVER["DOCUMENT_ROOT"] . "/img_acao/" . $imagens[0]->image);
        //unlink($_SERVER["DOCUMENT_ROOT"] . "/img_acao/{$imagens[0]->image}");



        DB::update("
            update acoes set nome = '$nome', ultimo = '$ultimo', maximo = '$maximo',
            minimo = '$minimo', variacao = '$variacao', var = '$var', vol = '$vol',
            image = '$imageName', valor = '$valor'  where id_acao = $id
        ");

        echo "<script>location.href='/anuncio_acoes'</script>";

    }








    public function comprarAcao($id){
        $id_compra = $id;
        $user = auth()->user();
        
        DB::insert("
            insert into compra_acao (id_user, id_acao)
            value
            ('$user->id','$id_compra')
        ");
        
        return redirect('/minhas_acoes');
        



    }

    public function minhasAcoes(){
        $user = auth()->user();
        $minhasAcoes = DB::select("
            select u.id, ac.nome, ac.ultimo, ac.maximo, ac.minimo, ac.variacao, ac.var, ac.vol, ac.image, ac.valor from users u 
            inner join compra_acao ca on u.id = ca.id_user
            inner join acoes ac on ac.id_acao = ca.id_acao
            where u.id = $user->id  
        ");

        

        
        
        return view('/minhas_acoes/minhas_acoes', ['minhasAcoes' => $minhasAcoes]);
    }

}
