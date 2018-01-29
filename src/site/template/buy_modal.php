<div style="display: none;">
    <div id="orderHistory" class="itemmodal"
         style="min-width: 560px; position: relative; padding: 30px 25px 5px 25px; border-radius: 6px; ">
        <div class="box-modal_close arcticmodal-close mini"></div>


        <div style="padding: 5px 10px; font-size: 14px; margin-bottom: 5px; background: rgba(0, 0, 0, 0.32); border: 1px solid rgba(0, 0, 0, 0.29);">
            <span style="margin-right: 4px; color:#4fa9dd; font-size: 16px;"><span class="glyphicon glyphicon-th-list"
                                                                                   aria-hidden="true"></span></span> Вы
            можете забрать ваши предметы на <a style="margin-left: 3px; color:#4fa9dd;"
                                               href="http://steamcommunity.com/id/me/tradeoffers/" target="_blank">странице
                предложений обмена в Steam</a>
        </div>


        <table class="table table-bordered" style="background: rgba(0, 0, 0, 0.29);">
            <thead style="font-weight: bold; font-size: 11px; text-transform: uppercase;">
            <tr>
                <th>ID заказа</th>
                <th>Дата</th>
                <th>Кейс</th>
                <th>Предмет</th>
                <th>Статус</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="text-align: center;" colspan="5">Вы не сделали ни одной покупки</td>
            </tr>
            </tbody>


        </table>
    </div>
</div>
<!-- modals-end -->
<!-- modals-start -->
<div style="display: none;">
    <div id="steamtrade" class="itemmodal"
         style="min-width: 560px; position: relative; padding: 30px 25px 5px 25px; border-radius: 6px; ">

        <div style="text-align: center; color: #4fa9dd; font-weight: bold; font-size: 20px; text-transform: uppercase; padding-bottom: 5px;">
            Steam trade
        </div>
        <div class="tradelinkbox" style="  height: 101px;">
            <form class="form-inline">
                <div class="form-group">
                    <div class="input-group" style="border-color: #434343;">
                        <input class="linkInput" placeholder="Введите вашу ссылку на обмен" type="text"
                               value="{user_steam}">
                        <a class="utlink">Сохранить</a>
                    </div>
                </div>
            </form>
            <a class="llink" data-modal="#tradelinkInstruction"
               href="http://steamcommunity.com/id/me/tradeoffers/privacy#trade_offer_access_url" target="_blank">Как
                узнать ссылку на обмен?</a>
            <span class="userPanelError"></span>
        </div>
    </div>
</div>


<div style="display: none;">
    <div id="payments" class="itemmodal"
         style="min-width: 560px; position: relative; padding: 30px 25px 5px 25px; border-radius: 6px; ">
        <div class="box-modal_close arcticmodal-close mini"></div>
        <div style="text-align: center; color: #4fa9dd; font-weight: bold; font-size: 20px; text-transform: uppercase; padding-bottom: 5px;">
            Пополнение баланса
        </div>
        <div class="ss">
            <center>
                <div class="boxww">Ваш баланс: <span class="user_balance">{balance-rub}</span> руб</div>
                <div class="boxwwdd"><input type="text" id="min" placeholder="Введите сумму" class="linkInput">
                    <button style="border: medium none; margin-top: -5px; padding: 10px;" class="utlink"
                            onclick="payment.send_inter()" id="sending">Создать счет
                    </button>
                </div>


            </center>
            <div style="margin-top:40px;"></div>
            <div class="clear_fix"></div>

        </div>

    </div>
</div>