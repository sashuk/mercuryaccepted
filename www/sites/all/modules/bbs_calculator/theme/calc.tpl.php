<div class="ui_calculator">
    <p class="ui_calc_slogon">Расчитайте стоимость нужного вам материала<br><span>прямо сейчас!</span></p>
    <div class="ui_calc_slogon_arrow"></div>
    <div class="ui_calculator_shadow_left"></div>
    <div class="ui_calculator_shadow_right"></div>
    <div class="ui_calculator_shadow_bottom"></div>
    <div class="ui_calculator_head"><span>Расчет стоимости</span></div>
    <div class="ui_calculator_body">
        <form action="#">
            <span class="title">Вид продукции</span>
            <select class="selectbox" name="form_calculator_type">
				<!--<option value="raspil" selected="">Доска радиального распила</option>-->
				<option value="brus" selected="">Оцилиндрованное бревно</option>
            </select>
            <br>
            <br>
            <span class="title">Парода дерева</span>
            <hr>
            <input id="form_breed_sosna" checked="checked" name="form_caclulator_breed" type="radio"/>
			<label for="form_breed_sosna"><span></span>Сосна</label>
            <input id="form_breed_listvyniatca" name="form_caclulator_breed" type="radio"/>
			<label for="form_breed_listvyniatca"><span></span>Лиственица</label>

            <br>
            <span class="title">Диаметр</span>
            <hr>
            <input id="form_diameter_do26" checked="checked" name="form_caclulator_diameter" type="radio"/>
            <label for="form_diameter_do26"><span></span>до 26 см</label>
            <input id="form_diameter_ot26" name="form_caclulator_diameter" type="radio"/>
            <label for="form_diameter_ot26"><span></span>более 26 см</label>

            <br>
            <br>
            <span class="title">Количество</span>
            <input type="text" class="ui_calculator_count" name="form_calculator_count"/>
            <span class="title">м³</span>
            <br>
            <br>
            <div class="ui_caculator_count_slider"></div>
            <span class="ui_calc_slider_min">-</span>
            <span class="ui_calc_slider_middle">-</span>
            <span class="ui_calc_slider_max">-</span>
            <br>
            <br>
            <!--<div class="ui_calculator_dashed_line"></div>-->
            <hr class="wide">
            <span class="ui_calculator_total_title">Итого :</span><span class="ui_calculator_total">Введите данные...</span>
            <div class="ui_calculator_order_wrap">
				<div class="ui_calculator_order">ЗАКАЗАТЬ</div>
            </div>
        </form>
        <script type="text/javascript">
            var $ui_caculator_count_slider = $('.ui_caculator_count_slider'),
                $ui_calculator_count = $('.ui_calculator_count'),
                $option_breed_sosna = $('#form_breed_sosna'),
                $option_breed_listv = $('#form_breed_listvyniatca'),
                $option_diameter_do26 = $('#form_diameter_do26'),
                $option_diameter_ot26 = $('#form_diameter_ot26'),
                $price_diameter = 0, $price_diameter_text = 'диаметр до 26 см', $price_breed = 0, $price_breed_text = 'Сосна', $price_total = 0,
                $min_val = 5, $max_val = 200, $count = 0, $slider_count = 0, $state_started = false;

            $('.ui_calc_slider_min').text($min_val);
            $('.ui_calc_slider_max').text($max_val);
            $('.ui_calc_slider_middle').text(parseInt($max_val / 2));
            var $val_calc = $max_val - $min_val;

            $ui_caculator_count_slider.simpleSlider({highlight:true});
            var $slider_object = $('.ui_caculator').find('slider');

            /*  Function for processing calc values  */
            var $func_calculator_process = function($count_val){
                $price_breed = ($option_breed_sosna.prop('checked') == true)? 1: 1;
                $price_diameter = ($option_diameter_do26.prop('checked') == true)? 6700: 7800;

                $ui_calculator_count.val($count_val);

                $price_total = $price_diameter * $count_val;
                $('.ui_calculator_total').text($price_total + ' Р');

                if($state_started == false){
                    $('.ui_calculator_order_wrap').animate({height: 50, 'margin-top': 20}, 200);
                    $state_started = true;
                }
            }

            $ui_caculator_count_slider.bind('slider:changed', function($event, $data){
                $slider_count = parseInt(($val_calc * $data.value) + $min_val);
                $('.slider').css('opacity','1');
                $func_calculator_process($slider_count);
            });
            $ui_calculator_count.on('input', function(){
                $slider_count = $(this).val();
                $func_calculator_process($slider_count);

                $('.slider').css('opacity','0.3');
            });
            $option_breed_listv.on('change', function(){
                $price_breed_text = 'Лиственница';
                $func_calculator_process($slider_count);
            });
            $option_breed_sosna.on('change', function(){
                $func_calculator_process($slider_count);
            });
            $option_diameter_ot26.on('change', function(){
                $price_diameter_text = 'диаметр более 26 см';
                $func_calculator_process($slider_count);
            });
            $option_diameter_do26.on('change', function(){
                $func_calculator_process($slider_count);
            });

            $('.ui_calculator_order').on('click', function(){

                addOrderToForm('Оцилиндрованное бревно - ' + $price_diameter_text + ' - ' + $price_breed_text + ', объем :' + $('[name="form_calculator_count"]').val() + ' м³, итого : ' + $price_total + ' Рублей');
            });
        </script>
    </div>
</div>