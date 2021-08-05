<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/404.css?v=<?php echo(rand()); ?>" />
</head>
<body>
    <!-- contenedor -->
    <div id="container" class="error-404">
        <!-- titulo  404 -->
        <div class="content-title">
            <div class="block-title">
                <span>oops!</span>
            </div>
            <div class="block-title">
                <span>4</span>
                <span>0</span>
                <span>4</span>
            </div>
            <div class="block-title">
                <a href="./" class="button">Volver</a>
            </div>
        </div>
        <!-- robot -->
        <div id="robot">
            <!-- cabeza robot -->
            <div id="cabeza">
                <div class="ojos">
                    <div class="ojo">
                        <div class="punto">
                            <span class="punto-cub"></span>
                            <span class="punto-cub"></span>
                            <span class="punto-cub"></span>
                            <span class="punto-cub"></span>
                            <span class="punto-cub"></span>
                            <span class="punto-cub"></span>
                            <span class="punto-cub"></span>
                            <span class="punto-cub"></span>
                            <span class="punto-cub"></span>
                        </div>
                    </div>
                    <div class="ojo">
                        <div class="punto"></div>
                    </div>
                </div>
                <div class="boca"></div>
                <div class="orejas">
                    <div class="oreja"></div>
                    <div class="oreja"></div>
                </div>
            </div>
            <!-- cuello robot -->
            <div id="cuello">
                <div class="cuello-part"></div>
                <div class="cuello-part"></div>
                <div class="cuello-part"></div>
            </div>
            <!-- cuerpo robot -->
            <div id="cuerpo">
                <div class="caja">
                    <div class="engrane">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="engrane">
                        <i class="fas fa-cog"></i>
                    </div>
                </div>
                <div class="brazos">
                        <div class="brazo">
                            <div class="mano"></div>
                        </div>
                        <div class="brazo">
                            <div class="mano"></div>
                        </div>
                </div>
                <!-- piernas robot -->
                <div class="piernas">
                    <div class="cintura">
                        <div class="cintura-part"></div>
                        <div class="cintura-part"></div>
                        <div class="cintura-part"></div>
                    </div>
                    <div class="pierna">
                        <div class="pie"></div>
                    </div>
                    <div class="pierna">
                        <div class="pie"></div>
                    </div>
                </div>
            </div>

            <!-- mensaje robot -->
            <div id="robot-mensaje">
                <span>Error</span>
            </div>
        </div>
    </div>
</body>
</html>