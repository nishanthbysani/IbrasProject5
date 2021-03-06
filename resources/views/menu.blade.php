<!DOCTYPE html>
<html lang="en">

<head>
    @extends('header')

    <title>Menu</title>
</head>

<body>
    <!-- Main Header Div Container -->
    <div id="headcontainermenu">
        <!-- Header containing both the image and nav bar -->
        <header id="headerIDinicio">
            <div class="topnav" id="myTopnav">
                <img id="navbaricon" src="..\Images\5.png" alt="logo" />
                <a href="inicio">INICIO </a> 
                <a href="sobrenosotros">SOBRE NOSOTROS</a>
                <a href="#" class="active">MENU</a>
                <a href="https://nxb4645.uta.cloud/blog/">BLOG</a>
                <a href="contacto">CONTACTO</a>
                <a href="#" onclick="document.getElementById('registropopupmargin').style.display='block'">REGISTRO</a>
                <a href="#" onclick="document.getElementById('id01').style.display='block'">INICIAR SESSION</a>
                <!-- <button type="button" onclick="document.getElementById('registropopupmargin').style.display='block'" style="width:auto;">REGISTRO</button></li>
                        <button type="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">INICIAR SESSION</button></li> -->
                <a href="javascript:void(0);" class="icon" onclick="navbarfunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <!-- <nav class="navigation-bar"> -->
            <!-- <img src="..\Images\5.png" alt="logo" /> -->
            <!-- <ul id="headernavigationcontainer">
                            <li class="navigation" id="selectedpagecolor"><a href="#">INICIO</a></li>
                            <li class="navigation"><a href="../HTML/Sobre Nosotros.html">SOBRE NOSOTROS</a></li>
                            <li class="navigation"><a href="../HTML/Menu.html">MENU</a></li>
                            <li class="navigation"><a href="https://nxb4645.uta.cloud/blog/">BLOG</a></li>
                            <li class="navigation"><a href="../HTML/Contacto.html">CONTACTO</a></li>
                            <li class="navigation"><button type="button" onclick="document.getElementById('registropopupmargin').style.display='block'" style="width:auto;">REGISTRO</button></li>
                            <li class="navigation"> <button type="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">INICIAR SESSION</button></li> -->
            <!-- <li class="navigation"><a href="" onclick="document.getElementById('modalpopup').style.display='block'" >INICIAR SESION</a></li>-->
            <!-- </ul> -->
            <!-- </nav> -->

        </header>
        <div class="cut-border"></div>
        <!-- Header apart from the nav bar -->
        <div id="remainingcontainer">
            <h5 id="headerdivline1">LAS MEJORES DE LA CIUDAD</h5>
            <h2 id="headerdivline2">Menú</h2>
        </div>
    </div>
    <div class="cut-border cut-bottom"></div>
    <!-- Main Body -->
    <main id="wrapper">
        <div id="menumaindiv">

            <h3>Elija su Hamburguesa</h3>
            <!-- Trending burgers -->
            <div id="menulatestburgersdiv">
                <div>
                    <img src="..\Images\burguer1.png" alt="">
                    <p class="menulatestburgerdivp">Mixta</p>
                    <p class="menulatestburgerdivp2">$11.90</p>
                </div>
                <div>
                    <img src="..\Images\burguer2.png" alt="">
                    <p class="menulatestburgerdivp">Pollo</p>
                    <p class="menulatestburgerdivp2">$11.90</p>
                </div>
                <div>
                    <img src="..\Images\burguer3.png" alt="">
                    <p class="menulatestburgerdivp">Carne</p>
                    <p class="menulatestburgerdivp2">$11.90</p>
                </div>
                <div>
                    <img src="..\Images\burguer2.png" alt="">
                    <p class="menulatestburgerdivp">Pollo</p>
                    <p class="menulatestburgerdivp2">$11.90</p>
                </div>
            </div>
            <!-- Total menu -->
            <div id="menuremainingburgersdiv">
                <div class="menuremainingburgersdivrow">
                    <table id="menupagetable">
                        <!-- Row 1 -->
                        <tr>
                            <td><img src="..\Images\hamburguesa21.jpg" alt=""></td>
                            <td width="30%">
                                <p class="menulatestburgerdivp">Pollo</p>
                            </td>
                            <td>
                                <p class="menuremainingburgersp">$12.00</p>
                            </td>
                            <td><img src="..\Images\hamburguesa20.jpg" alt=""></td>
                            <td width="30%">
                                <p class="menulatestburgerdivp">Mixta</p>
                            </td>
                            <td>
                                <p class="menuremainingburgersp">$20.00</p>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr>
                            <td><img src="..\Images\hamburguesa18.jpg" alt=""></td>
                            <td width="30%">
                                <p class="menulatestburgerdivp">Carne</p>
                            </td>
                            <td>
                                <p class="menuremainingburgersp">$12.00</p>
                            </td>
                            <td><img src="..\Images\hamburguesa16.jpg" alt=""></td>
                            <td width="30%">
                                <p class="menulatestburgerdivp">Pollo</p>
                            </td>
                            <td>
                                <p class="menuremainingburgersp">$6.00</p>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr>
                            <td><img src="..\Images\hamburguesa13.jpg" alt=""></td>
                            <td width="30%">
                                <p class="menulatestburgerdivp"> de todito</p>
                            </td>
                            <td>
                                <p class="menuremainingburgersp">$12.00</p>
                            </td>
                            <td><img src="..\Images\hamburguesa12.jpg" alt=""></td>
                            <td width="30%">
                                <p class="menulatestburgerdivp">Mixta</p>
                            </td>
                            <td>
                                <p class="menuremainingburgersp">$20.00</p>
                            </td>
                        </tr>
                        <!-- Row 4 -->
                        <tr>
                            <td><img src="..\Images\hamburguesa10.jpg" alt=""></td>
                            <td width="30%">
                                <p class="menulatestburgerdivp">Carne</p>
                            </td>
                            <td>
                                <p class="menuremainingburgersp">$12.00</p>
                            </td>
                            <td><img src="..\Images\hamburguesa4.jpg" alt=""></td>
                            <td width="30%">
                                <p class="menulatestburgerdivp">Pollo</p>
                            </td>
                            <td>
                                <p class="menuremainingburgersp">$6.00</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="cut-border cut-bottom"></div>
    </main>
    <!-- Footer Starts -->
    @extends('footer')


@extends('loginandregistrationform')
</body>

</html>