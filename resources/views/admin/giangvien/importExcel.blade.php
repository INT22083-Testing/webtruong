@extends('admin.layout.index')
@section('title')
    {{"Quản trị trang web"}}
@endsection
@section('content')
    <script type="text/javascript">
        (function ($) {
            $(document).ready(function () {
                var main = $('#form');
                main.contentTabs();
            });
        })(jQuery);
    </script>
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Danh mục Giảng viên</h5>
                <span>Quản lý danh sách Giảng viên</span>
            </div>
            <div class="horControlB menu_action">
                <ul>
                    <li>
                        <a href="admin/giangvien/them">
                            <img src="admin_asset/images/icons/control/16/add.png">
                            <span>Thêm mới</span>
                        </a></li>
                    <li>
                        <a href="admin/giangvien/danhsach">
                            <img src="admin_asset/images/icons/control/16/list.png">
                            <span>Danh sách</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>

    <div class="wrapper">
        <form class="form" id="form" action="admin/giangvien/themfile" method="post" enctype="multipart/form-data">
            <fieldset>
                <div class="widget">
                    <div class="title">
                        <img src="admin_asset/images/icons/dark/add.png" class="titleIcon">
                        <h6>Thêm mới giảng viên</h6>
                    </div>
                    <div class="tab_container">
                        <div id="tab1" class="tab_content pd0">
                            {{message_success()}}
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="formRow">
                                <label class="formLeft">Chọn File:<span class="req">*</span></label>
                                <div class="formRight">
                                    <div class="left"><input type="file" id="image" name="file"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="formSubmit">
                        <input value="Thêm mới" class="redB" type="submit">
                        <input value="Hủy bỏ" class="basic" type="reset">
                    </div>
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="clear mt30"></div>
@endsection