<html>
<style>

@page {
    padding:0;
}

header,
footer {
    width: 100%;
    text-align: center;
    position: fixed;
}
header {
    top: 0px;
}
footer {
    left:-400px;
    bottom: 80px;
}

.barra{
    margin-top:20;
    margin-left:90;
    margin-bottom: 30px;
    width: 491.338583px;
    height:2mm;
    background-color: black;
}
.pie-pagina{
    font-size: 22px;
    font-family: 'Satisfy';
    color: black;
}
.contenido{
    margin-left:7%;
    width: 50%;
    float:left;
}
.contenido h1{
    font-size:50px;
    color: black;
}
.barra{
    margin-top: 2.5%;
    margin-left: -4%;
    width: 142.8%;
    height:6px;
    background-color: black;
}
.barra2{
    margin-top:1.4%;
    margin-left: -4%;
    width: 142.8%;
    height:6px;
    background-color: green;
}
.container{
    position: fixed;
    transform:rotate(-90deg);
    margin-left: 23px;
    text-align: right;
    margin-top: 363px;
    width: 160%;
    height: 180px;
    background-color: red;
    color:white; 
}
.container h1{
    margin-right: 12%;
    margin-top:5%;
    font-size: 50px;    
}

.servicio{
    width: 140%;
}

.titulo-paquete{
    font-size: 50px;
    text-align: center;
}

.titulo-servicio{
    font-size: 25px;
}

.descripcion{
    font-size: 18px;
}

</style>
<body>
    <div class="container">
        <h1>Text</h1>
    </div>
    <div class="contenido">
        <h1>Title</h1>
        <div class="barra"></div>

        @foreach($items as $item)
            <div class="servicio">
                <h3 class="titulo-servicio">{{ $item->title }}</h3>
                <ul>
                    <li class="descripcion">{{ $item->text }}</li>
                </ul>
            <hr>
            </div>
        @endforeach
    </div>
    <footer class="pie-pagina">
        <h1>Footer</h1>
    </footer>
</body>
</html>