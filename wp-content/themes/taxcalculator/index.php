<?php
/**
 * Created by PhpStorm.
 * User: Feri
 * Date: 21/12/2016
 * Time: 20:13
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function () {
            $("#slider").slider(
                {
                    min: 0,
                    max: 70, // max is 24
                    step: 0.01,
                    slide: function(event, ui) {
                        $(".rsize").text((ui.value >18)?(ui.value-4)+'W':ui.value);
                    }
                });
        });

        $(function () {
            $("#slider_weeks").slider(
                {
                    min: 0,
                    max: 70, // max is 24
                    step: 0.5,
                    value: 40,
                    slide: function(event, ui) {
                        $(".weekly_hours").text(ui.value.toFixed(2));

                        var weekly_hours = ui.value

                        var hourly_rate = $('#slider').slider('value');

                        var hourly_coeff = 52*weekly_hours*hourly_rate;
                        $('.weeklyhours').val(ui.value);
                        $(".maininput").val(Math.round(hourly_coeff / 10)*10);
                        $('#knob').jqxKnob('val', hourly_coeff/1000 );













                    }
                });
        });
    </script>
    <meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta name="msapplication-tap-highlight" content="no" />
    <title>JavaScript Knob - Mobile Example</title>
    <link rel="stylesheet" href="wp-content/themes/taxcalculator/styles/style.css" type="text/css" />
    <link rel="stylesheet" href="wp-content/themes/taxcalculator/styles/jqx.basex.css" type="text/css" />
    <link rel="stylesheet" href="wp-content/themes/taxcalculator/styles/jqx.windowsphonex.css" type="text/css" />
    <link rel="stylesheet" href="wp-content/themes/taxcalculator/styles/jqx.blackberryx.css" type="text/css" />
    <link rel="stylesheet" href="wp-content/themes/taxcalculator/styles/jqx.android.css" type="text/css" />
    <link rel="stylesheet" href="wp-content/themes/taxcalculator/styles/jqx.mobilex.css" type="text/css" />
    <script type="text/javascript" src="wp-content/themes/taxcalculator/js/jqxcore.js"></script>
    <script type="text/javascript" src="wp-content/themes/taxcalculator/js/jqxdata.js"></script>
    <script type="text/javascript" src="wp-content/themes/taxcalculator/js/jqxbuttons.js"></script>
    <script type="text/javascript" src="wp-content/themes/taxcalculator/js/simulator.js"></script>
    <script type="text/javascript" src="wp-content/themes/taxcalculator/js/jqxdraw.js"></script>
    <script type="text/javascript" src="wp-content/themes/taxcalculator/js/jqxknob.js"></script>





    <script type="text/javascript">
        $(document).ready(function () {
            var cango = true;
            var theme = prepareSimulator("knob");
            $('#knob').jqxKnob({
                value: 60
                , min: 0
                , max: 50

                , startAngle: 120
                , endAngle: 420
                , width: '75%'
                , height: '75%'
                , snapToStep: true
                , rotation: 'clockwise'
                , style: {
                    stroke: 'lightblue'
                    , strokeWidth: 3
                    , fill: {
                        color: 'white'
                        , gradientType: "linear"
                        , gradientStops: [[0, 1], [50, 0.9], [100, 1]]
                    }
                }
                , marks: {
                    colorRemaining: {
                        color: 'grey'
                        , border: 'grey'
                    }
                    , colorProgress: {
                        color: '#00a1ff'
                        , border: '#00a4e1'
                    }
                    , type: 'line'
                    , offset: '71%'
                    , thickness: 1
                    , size: '6%'
                    , majorSize: '9%'
                    , majorInterval: 5
                    , minorInterval: 1
                }
                , labels: {
                    offset: '88%'
                    , step: 5
                    , visible: true
                }
                , progressBar: {
                    style: {
                        fill: '#00a1ff'
                        , stroke: '#0083d0'
                    }
                    , size: '7%'
                    , offset: '50%'
                    , background: {
                        fill: '#d3d3d3'
                        , stroke: '#d3d3d3'
                    }
                }
                , pointer: {
                    type: 'arrow'
                    , style: {
                        fill: '#4dd434'
                        , stroke: '#d3d3d3'
                    }
                    , size: '69%'
                    , offset: '49%'
                    , thickness: 30
                }
            });
            $('#knob').jqxKnob('val', 30);
            //$('#knob').jqxKnob('max', 120);
            initSimulator("knob");
            //
            //
            $('.maininput').on('input', function (e) {
                $('#knob').jqxKnob('val', $(this).val() / 1000);
                //appendvalues();
                onchangevalue()

            });
            //
            //
            // appendvalues();
            //$("#slider").slider();
            var cango = true;
            $(".dynamic_slider_container").hover(function (e) {
                    $('.cango').val('0');
                    // alert('testtt');
                }, // over
                function (e) {
                    $('.cango').val('1');
                    // alert('true');
                } // out
            );
            //
            //
//            $('#slider').slider({
//    change: function() {
//        $(".maininput").val(100);
//
//
//    }
//});


            $(function() {
                var weekly_hours;
                var hourly_rate;
                var hourly_coeff;
                $("#slider").slider({
                    slide: function(event, ui) {
                        // use ui.value to get a number
                        hourly_rate = ui.value;
                        weekly_hours = $(".weeklyhours").val();


                        var hourly_coeff = 52*weekly_hours*hourly_rate;

                        $(".hourly_rate").html(ui.value);
                        $(".maininput").val(Math.round(hourly_coeff / 10)*10);
                        $('#knob').jqxKnob('val', hourly_coeff/1000 );

                    }
                });
            });
            // $( document ).on("mouseover", ".yoursalary", function() {
            //alert('test');

            //  $('#knob').jqxKnob({allowValueChangeOnClick: true,
            //                    allowValueChangeOnDrag: false,
            //                     disabled: false
            //                   });
            //  appendvalues()





//});


            // $('body').on("mouseover", ".yoursalary", function() {
            //alert('test');

            //alert('test');
            // document.removeEventListener("mousemove", function(){}, false);



            // $('.cango').val('0');
//});




            //
            //
            //
            //
            //
            appendvalues();
        });






        function appendvalues() {
            $("text").each(function () {
                $(this).attr('x', $(this).attr('x') - 5);
                $(this).css('color', 'red');
            });
            $('.jqx-knob-label').append('K');
            $('.jqx-knob-label').prepend('£');
            $('.jqx-knob-label').css({color: 'red'});
            $('.tdLeft').append('<div class="centeredvalue"></div>');
            $theval = $('.maininput').val();
            $gross_income = + Math.round(~~$theval /10) *10;

            $('.centeredvalue').html('Your salary:<br><div class="yoursalary" style="font-size: 30px;"> £' + $gross_income + '<br></div> ');
            $('.tdLeft').parent().css('position', 'relative');
            $('.yoursalary').css('font-size', '30px');
        }
        var exelse = false;
        var ex140 = false;
        var ex100 = false;
        var ex80 = false;
        var ex60 = false;
        var ex40 = false;
        var cango = true;

        function onchangevalue() {
            $theval = $('.maininput').val();
            //$(".maininput").off('click');
            if ($theval > 140000) {
                if (ex140 == false) {
                    exelse = false;
                    ex140 = true;
                    ex100 = false;
                    ex80 = false;
                    ex60 = false;
                    ex40 = false;
                    $('#knob').jqxKnob({max: 220, labels: {
                        offset: '88%'
                        , step: 20
                        , visible: true
                    }});
                    appendvalues();
                }
            }
            else if ($theval > 100000) {
                if (ex100 == false) {
                    exelse = false;
                    ex140 = false;
                    ex100 = true;
                    ex80 = false;
                    ex60 = false;
                    ex40 = false;
                    $('#knob').jqxKnob({max: 150, labels: {
                        offset: '88%'
                        , step: 20
                        , visible: true
                    }});
                    appendvalues();
                }
                // $('#knob').jqxKnob('max', 150);
                // appendvalues();
            }
            else if ($theval > 125900) {
                if (ex80 == false) {
                    exelse = false;
                    ex140 = false;
                    ex100 = false;
                    ex80 = true;
                    ex60 = false;
                    ex40 = false;
                    $('#knob').jqxKnob({min: 120, max: 200, labels: {
                        offset: '88%'
                        , step: 15
                        , visible: true
                    }});
                    appendvalues();
                }
                // $('#knob').jqxKnob('max', 120);
                // appendvalues();
            }
            else if ($theval > 94990) {
                if (ex60 == false) {
                    exelse = false;
                    ex140 = false;
                    ex100 = false;
                    ex80 = false;
                    ex60 = true;
                    ex40 = false;
                    $('#knob').jqxKnob({min: 89, max: 130, labels: {
                        offset: '88%'
                        , step: 10
                        , visible: true
                    }});
                    appendvalues();
                }
                // $('#knob').jqxKnob('max', 90);
                // appendvalues();
                //$('.centeredvalue').html('Your salary:<br> £' + $theval + ' ');
            }
            else if ($theval > 45980) {
                if (ex40 == false) {
                    exelse = false;
                    ex140 = false;
                    ex100 = false;
                    ex80 = false;
                    ex60 = false;
                    ex40 = true;
                    $('#knob').jqxKnob({min: 40, max: 90, labels: {
                        offset: '88%'
                        , step: 5
                        , visible: true
                    }});
                    appendvalues();
                }
                // $('#knob').jqxKnob('max', 70);
                // appendvalues();
                //$('.centeredvalue').html('Your salary:<br> £' + $theval + ' ');
            }
            else {
                if (exelse == false) {
                    exelse = true;
                    ex140 = false;
                    ex100 = false;
                    ex80 = false;
                    ex60 = false;
                    ex40 = false;
                    $('#knob').jqxKnob({min: 0, max: 50, labels: {
                        offset: '88%'
                        , step: 5
                        , visible: true
                    }});
                    appendvalues();
                }
            }
            if ($('.cango').val() == 1) {
                // $('#slider').slider('value', $theval / 1000);
                //alert('hellooo');
            }
            $('.centeredvalue').html('Your salary:<br><div class="yoursalary" style="font-size: 30px;"> £' + Math.round(~~$theval / 10)*10 + ' </div>');
        }
    </script>
</head>

<body>

<div class="container">


    <div class="dynamic_slider_container">
        <div class="hourlyrate_container">£<span class="hourly_rate"></span>/h</div>
        <div id="slider"></div>
        <br>
        <br>
        <div class="hourlyrate_container">Weekly hours: <span class="weekly_hours">35.00</span></div>
        <div id="slider_weeks"></div>

        <input type="hidden" class="weeklyhours" value="35" />
        <input type="hidden" class="cango" value="1" />
        <input type="hidden" class="maininput" value="25000" /> </div>
    <div id="demoContainer" class="device-mobilex">
        <div id="container" class="device-mobile-container">

            <div style="margin: 40% auto;" id="knob"> </div>
        </div>
    </div>
    <div style="height: 500px; clear: both">test</div>
    <br>


</div>
<script type="text/javascript" src="wp-content/themes/taxcalculator/js/touch-punch.js"></script>
</body>

</html>
