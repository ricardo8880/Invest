/*$(function() {
    $('body').css('background', 'red')
})
*/
/*$(document).ready(function(){

})*/

/*chart minhas_acoes*/

$(document).ready(function() {
    $('#calcular_acao').click(function() {
        let a1 = parseInt($('#acaoum').val())
        let a2 = parseInt($('#acaodois').val())
        let a3 = parseInt($('#acaotres').val())
        let a4 = parseInt($('#acaoquatro').val())
        let a5 = parseInt($('#acaocinco').val())

        let nomeAcao1 = $('#nomeAcao1').val()
        let nomeAcao2 = $('#nomeAcao2').val()
        let nomeAcao3 = $('#nomeAcao3').val()
        let nomeAcao4 = $('#nomeAcao4').val()
        let nomeAcao5 = $('#nomeAcao5').val()


        gerarGrafico(a1, a2, a3, a4, a5, nomeAcao1, nomeAcao2, nomeAcao3, nomeAcao4, nomeAcao5)

    })

})





function gerarGrafico(a1, a2, a3, a4, a5, nomeAcao1, nomeAcao2, nomeAcao3, nomeAcao4, nomeAcao5) {

    var options = {
        series: [a1, a2, a3, a4, a5],
        chart: {
            width: 380,
            type: 'pie',
        },
        labels: [nomeAcao1, nomeAcao2, nomeAcao3, nomeAcao4, nomeAcao5],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 350
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#chartUM"), options);
    chart.render();


}

/*---------------------------------------------------------------------------*/


/*$(function() {
    $('.noticia').click(function(d) {
        d.preventDefault()
        let id = $(this).attr('href')
        let distancia = $(id).offset().top
        $('html, body').animate({
            scrollTop: distancia
        }, 2000)


    })

})*/



/*---------------------------------CHART2 ACAO------------------------------------------*/

var options = {
    series: [{
        name: 'Inflation',
        data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2]
    }],
    chart: {
        height: 350,
        type: 'bar',
    },
    plotOptions: {
        bar: {
            borderRadius: 10,
            dataLabels: {
                position: 'top', // top, center, bottom
            },
        }
    },
    dataLabels: {
        enabled: true,
        formatter: function(val) {
            return val + "%";
        },
        offsetY: -20,
        style: {
            fontSize: '12px',
            colors: ["#304758"]
        }
    },

    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        position: 'top',
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false
        },
        crosshairs: {
            fill: {
                type: 'gradient',
                gradient: {
                    colorFrom: '#D8E3F0',
                    colorTo: '#BED1E6',
                    stops: [0, 100],
                    opacityFrom: 0.4,
                    opacityTo: 0.5,
                }
            }
        },
        tooltip: {
            enabled: true,
        }
    },
    yaxis: {
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false,
        },
        labels: {
            show: false,
            formatter: function(val) {
                return val + "%";
            }
        }

    },
    title: {
        text: 'Calcule os altos e baixos!',
        floating: true,
        offsetY: 330,
        align: 'center',
        style: {
            color: '#444'
        }
    }
};

var chart = new ApexCharts(document.querySelector("#chartdois"), options);
chart.render();

/*confirmar envio do formulario pagina anuncio_acoes*/

function confirmarEnvio() {
    if (!confirm('Tem certeza que deseja Edita!')) {
        return false
    }
}