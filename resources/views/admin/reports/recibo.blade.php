
@extends('admin.layouts.sistema')


@section('admin')










<div id="invoice-POS">
    <div id="printed_content" class="">
        <center id="logo">
            <div class="logo">Lavanderia El Manantial</div>
            <div class="info"></div>
            <h2>POST LTDA</h2>
        </center>
    </div>

    <div class="mid">
        <div class="info">
            <h2>Contacto</h2>
            <p>
                Direccion: avenida paltas Email: prueba@gmail.com Celular:
                094764643
            </p>
        </div>
    </div>

    <div class="bot">
        <div id="table">
            <table>
                <tr class="tabletitle">
                    <td class="item"><h2>Cliente</h2></td>
                    <td class="Hours"><h2>Pedido</h2></td>
                    <td class="Rate"><h2>Cantidad</h2></td>
                    <td class="Rate"><h2>Total</h2></td>
                </tr>

                <tr class="service">
                    <td class="tableitem"><p class="itemtext">Luis Jimenez</p></td>
                    <td class="tableitem"><p class="itemtext">456</p></td>
                    <td class="tableitem"><p class="itemtext">45 kg</p></td>
                    <td class="tableitem"><p class="itemtext">$23.00</p></td>
                    <td class="tableitem"></td>
                </tr>

                <tr class="tabletitle">
                    <td></td>
                    <td></td>
                    <td class="Rate"><p class="itemtext">Tax</p></td>
                    <td class="Payment"><p class="itemtext">$23.00</p></td>
                </tr>

                <tr class="tabletitle">
                    <td></td>
                    <td></td>
                    <td class="Rate">Total</td>
                    <td class="Payment"><h2>$23.00</h2></td>
                </tr>
            </table>

            <div class="legalcopy">
                <p class="legal">
                    <strong>**** Gracias por su Compra ****</strong><br />
                    Vuelva Pronto.
                </p>
            </div>
            <div class="serial-number">
                Serial: <span class="serial">
                    0000933993838
                </span>
                <span>26/06/2023 &nbsp; 01:51 am</span>

            </div>
        </div>
    </div>
</div>

<style>
    #invoice-POS {
        box-shadow: 0 0 1in -0.25in rgb(0, 0, 0.5);
        padding: 2mm;
        margin: 0 auto;
        width: 58mm;
        background: #fff;
    }

    #invoice-POS ::selection {
        background: #f315f3;
        color: #fff;
    }

    #invoice-POS ::-moz-selection {
        background: #f315f3;
        color: #fff;
    }

    #invoice-POS h1 {
        font-size: 1.5em;
        color: #222;
    }
    #invoice-POS h2 {
        font-size: 0.6em;
    }
    #invoice-POS h3 {
        font-size: 1.2em;
        font-weight: 300;
        line-height: 2em;
    }
    #invoice-POS p {
        font-size: 0.7em;
        line-height: 1.2em;
        color: #666;
    }
    #invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot {
        border-bottom: 1px solid #eee;
       
    }
    #invoice-POS #top {
        min-height: 100px;
        
    }

    #invoice-POS #mid {
        min-height: 80px;
        
    }
    #invoice-POS #bot {
        min-height: 50px;
        
    }

    #invoice-POS #top .logo {
        height: 60px;
        width: 60px;
        background-image: url() no-repeat;
        background-size: 60px 60px;
        border-radius: 50px;

        
    }

    #invoice-POS .info {
        display: block;
        margin-left: 0;
        text-align: center;
       
       
        
        
    }

    #invoice-POS table {
        width: 100%;
        border-collapse: collapse;
        
    }

    #invoice-POS .tabletitle {
        font-size: 0.5em;
        background: #eee;
        
    }
    #invoice-POS .service {
        border-bottom: 1px solid#eee;
        
    }

    #invoice-POS .item {
        width: 24mm;
        
    }
    #invoice-POS .itemtext {
        font-size: 0.5em;

    }

    #invoice-POS #legalcopy{
        margin-top: 5mm;
        text-align: center;
        
    }
    .serial-number{
        margin-top: 5mm;
        margin-bottom: 2mm;
        text-align: center;
        font-size: 12px;

    }
    .serial {
        font-size: 10px !important;
    }



   


</style>


@endsection