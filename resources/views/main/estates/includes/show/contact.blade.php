<div class="row" id="contact_us_page">
    <div class="col-sm-6 col-xs-12">
        <div class="info_foo_con info_foo_con_00">
            <h3 class="title_contct_us">معلومات التواصل</h3>
            <ul>
                <li>
                    <i class="fa fa-user" style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                    <strong style="font-size: 16px">اسم المستخدم</strong>
                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $estate->advertiser->name }}</a>
                </li>
                <li>
                    <i class="fa fa-user" style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                    <strong style="font-size: 16px">اسم المعلن</strong>
                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $estate->advertiser->name }}</a>
                </li>
                <li>
                    <i class="fa fa-user"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                    <strong style="font-size: 16px">نوع المعلن</strong>
                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">نص نص نص نص</a>
                </li>
                <li>
                    <i class="fas fa-mobile"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                    <strong style="font-size: 16px">الجوال 1</strong>
                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $estate->advertiser->mobile1 }}</a>
                </li>
                <li>
                    <i class="fas fa-mobile"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                    <strong style="font-size: 16px">الجوال 2</strong>
                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $estate->advertiser->mobile2 }}</a>
                </li>
                <li>
                    <i class="fas fa-mobile"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                    <strong style="font-size: 16px">تلفون</strong>
                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $estate->advertiser->telephone }}</a>
                </li>
                <li>
                    <i class="fa fa-fax"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                    <strong style="font-size: 16px">فاكس</strong>
                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $estate->advertiser->fax }}</a>
                </li>
                <li>
                    <i class="fas fa-mobile"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                    <strong style="font-size: 16px">سنترال</strong>
                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $estate->advertiser->central }}</a>
                </li>
                <li>
                    <i class="fas fa-envelope"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                    <strong style="font-size: 16px">البريد الإلكترونى</strong>
                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $estate->advertiser->email }}</a>
                </li>
                <li>
                    <i class="fas fa-envelope"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                    <strong style="font-size: 16px">الموقع الإلكترونى</strong>
                    <a href="tel" target="_blank"style="font-size: 16px;padding-right: 40px">{{ $estate->advertiser->website }}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-sm-6 col-xs-12">
        <div class="form_cont form_cont_00">
        <h3 class="title_contct_us">ارسال رسالة خاصة إلى المعلن</h3>
            
            <div id="success-message"></div>

            <form>
                <div class="form-group">
                    <label for=""> <i class="fa fa-user"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i> الأسم </label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="">
                </div>	
                <div class="form-group">
                    <label for=""> <i class="fa fa-phone"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i> رقم الجوال </label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="">
                </div>
                <div class="form-group">
                    <label for=""> <i class="fas fa-envelope"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i> البريد الإلكترونى </label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for=""> <i class="fas fa-envelope-open-text"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i> النص </label>
                    <textarea class="form-control" name="body" id="body" rows="6"></textarea>
                </div>
                <input type="hidden" name="to" id="to" value="{{ $estate->user_id }}">	
                <button onclick="sendMessage();return false;" class="btn btn-default btn_web">إرســال</button>
            </form>
        </div>
    </div>
</div>