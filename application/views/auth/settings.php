<style>
    .font {
    font-size: 1rem;
    display: block;
    padding: 12px;
    
}
body .ant-tabs-nav .ant-tabs-tab {
    padding: 20px;
}
body .ant-tabs-nav .ant-tabs-tab-active {
    font-weight: 600;
    color: #ee3059;
}
.ant-tabs-nav .ant-tabs-tab-active {
    color: #108ee9;
}
.ant-tabs-nav .ant-tabs-tab {
    display: inline-block;
    height: 100%;
    margin-right: 24px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    position: relative;
    padding: 8px 20px;
    -webkit-transition: color .3s cubic-bezier(.645,.045,.355,1);
    -o-transition: color .3s cubic-bezier(.645,.045,.355,1);
    transition: color .3s cubic-bezier(.645,.045,.355,1);
    cursor: pointer;
    text-decoration: none;
}
.submit {
    margin-bottom: 20px;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;
    cursor: pointer;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: bold;
    color: white;
    margin-top: 30px;
    padding: 10px 20px;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(228, 228, 228);
    border-image: initial;
    border-radius: 5px;
    background: rgb(238, 48, 89);
    transition: all 0.2s ease 0s;
}
.css-1jgqklf, [data-css-1jgqklf] {
    width: 100%;
    margin-bottom: 10px;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;
    padding: 10px;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(228, 228, 228);
    border-image: initial;
    border-radius: 5px;
    transition: all 0.2s ease 0s;
}
.css-p4boyr, [data-css-p4boyr] {
    width: 100%;
    max-width: 100%;
    min-width: 100%;
    min-height: 100px;
    margin-bottom: 10px;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;
    padding: 10px;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(228, 228, 228);
    border-image: initial;
    border-radius: 5px;
    transition: all 0.2s ease 0s;
}
.css-wqksia, [data-css-wqksia] {
    box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;
    cursor: pointer;
    display: block;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: bold;
    color: white;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(228, 228, 228);
    border-image: initial;
    border-radius: 5px;
    background: rgb(238, 48, 89);
    margin: 30px auto 20px;
    padding: 10px 20px;
    transition: all 0.15s ease 0s;
}
.css-1rtk3im, [data-css-1rtk3im] {
    width: 168px;
    height: 42px;
    color: rgb(155, 155, 155);
    border-radius: 5px;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(234, 234, 234);
    border-image: initial;
    transition: all 0.15s ease 0s;
}
</style>
<form method="post" action="<?= base_url('Auth/changePassword')?>" >


<div class="css-nil account-body container" style="position: relative; top: -90px; background: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.08) 0px 7px 13px; padding: 40px; min-height: 620px; margin-bottom: 80px;">
<div class="ant-tabs ant-tabs-top ant-tabs-line" style="margin-top: 140px;">
<div role="tablist" class="ant-tabs-bar" tabindex="0">
    <div class="ant-tabs-nav-container">
    <nav class="navbar navbar-expand-sm justify-content-between" id="navMainMenu">
      <ul class="navbar-nav nav-fill w-100 align-items-start">
        <li class="nav-item">
            <a class="nav-link active" id="ktg-menu" onclick="openCity(event, 'akun')">Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ktg-menu" onclick="openCity(event, 'edit')">Edit Profile</a>
        </li>
        <span unselectable="unselectable" class="ant-tabs-tab-prev ant-tabs-tab-btn-disabled">
            <span class="ant-tabs-tab-prev-icon">
                 </span>
                </span>
                <span unselectable="unselectable" class="ant-tabs-tab-next ant-tabs-tab-btn-disabled">
                    <span class="ant-tabs-tab-next-icon">
                   </span>
                </span>
                <div class="ant-tabs-nav-wrap">
                    <div class="ant-tabs-nav-scroll">
                        <div class="ant-tabs-nav ant-tabs-nav-animated">
                            <div class="ant-tabs-ink-bar ant-tabs-ink-bar-animated" style="display: block; transform: translate3d(0px, 0px, 0px); width: 92px;">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="akun" class="tabcontent">
    <div class="ant-tabs-content ant-tabs-content-animated" style="margin-left: 0%;">
    <div role="tabpanel" aria-hidden="false" class="ant-tabs-tabpane ant-tabs-tabpane-active" style="padding: 15px 15px 25px;" id="akun">
    <div class="css-13azwyo RC-AccountPanel"><h2 style="width: 100%; font-family: heading-bold; margin-bottom: 0.5rem; height: 64px; font-size: 3.5rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74);">Account</h2>
    <span class="css-1qsy582 is-block">Manage your ID and keep your account secure.</span>
    <div class="columns">
        <div class="column is-7">
            <h3 style="width: 100%; font-family: heading; height: 30px; font-size: 1.25rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74); margin-top: 30px; margin-bottom: 12px;">Account Email</h3>
            <div class="RC-TextInput columns">
                <div class="column is-3">
                    <label class="font">Email</label>
                </div><div class="column is-10">
                    <span class="font"><?=$user['email']?></span>
                </div>
            </div>
            <?= $this->session->flashdata('flash'); ?>
            <?= form_error('old_password','<div class="text-danger" role="alert">', '</div>');?>
<?= form_error('new_password','<div class="text-danger" role="alert">', '</div>');?>
            <h3 style="width: 100%; font-family: heading; height: 30px; font-size: 1.25rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74); margin-top: 30px; margin-bottom: 12px;">Change Password</h3>
            <div class="RC-TextInput columns">
                <div class="column is-3">
                    <label class="font">Current Password</label>
                </div><div class="column is-9">
                <input type="password" name="old_password" style="width: 100%; margin-bottom: 20px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" id="password" placeholder="Current Password"  >
                    <span class="css-en8lkd"></span>
                </div>
            </div>
            <div class="RC-TextInput columns">
                <div class="column is-3">
                    <label class="font">New Password</label>
                </div
                ><div class="column is-9">
                <input type="password" name="new_password" style="width: 100%; margin-bottom: 20px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" id="password" placeholder="New Password"  >
                    <span class="css-en8lkd"></span>
                </div>
            </div>
            <div class="RC-TextInput columns">
                <div class="column is-3">
                    <label class="font">Confirm New Password</label>
                </div>
                <div class="column is-9">
                <input type="password" name="re_password" style="width: 100%; margin-bottom: 20px; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;" id="password" placeholder="Confirm New Password"  >
                    <span class="css-en8lkd"></span>
                </div>
            </div>
            <input type="submit" value="Save Settings" href =""class="submit">
        </div>
        <div class="column is-5">
            <h3 style="width: 100%; font-family: heading; height: 30px; font-size: 1rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74); margin-top: 30px; margin-bottom: 12px;">Delete Account</h3>
            <a href="<?= base_url('Auth/hapusAccount')?>">Delete my Krowd Account</a>
        </div>

    </div>
   
</div>
</div>

</form>

<form method="post" action="<?= base_url('user/ubah')?>" >
<div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive" style="padding: 15px 15px 25px;">
</div>
</div>

</div>
</div>
<div id="edit" class="tabcontent">
<div role="tabpanel" aria-hidden="false" class="ant-tabs-tabpane ant-tabs-tabpane-active" style="padding: 15px 15px 25px;">
<div class="css-13azwyo RC-ProfilePanel">
    <h2 style="width: 100%; font-family: heading-bold; margin-bottom: 0.5rem; height: 64px; font-size: 3.5rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74);">Edit Profile</h2>
    <span class="css-1qsy582 is-block">Keep track on any latest update on your collaborated &amp; initiated projects.</span>
    <div class="columns">
        <div class="column is-9">
            <h3 style="width: 100%; font-family: heading; height: 30px; font-size: 1.25rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74); margin-top: 30px; margin-bottom: 12px;">Profile</h3>
           
            <div class="RC-TextInput columns">
                <div class="column is-3">
                    <label class="css-ew3sm7">Name</label>
                </div><div class="column is-9">
                    <input type="text" name="username" placeholder="" class="css-1jgqklf">
                    <span class="css-en8lkd"></span>
                </div>
            </div>
            <div class="columns">
                <div class="column is-3">
                    <label class="css-ew3sm7">Expertise</label>
                </div><div class="column is-9">
                    <div class="ant-select ant-select-enabled" style="width: 100%; padding: 10px; transition: all 0.2s ease 0s; border: 1px solid rgb(228, 228, 228); border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.07) 0px 2px 5px;">
                    <div class="ant-select-selection ant-select-selection--multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                        <div class="ant-select-selection__rendered">
                            <div unselectable="unselectable" class="ant-select-selection__placeholder" style="display: block; user-select: none;">Programmer, </div>
                            <ul>
                                <li class="ant-select-search ant-select-search--inline">
                                    <div class="ant-select-search__field__wrap">
                                        <input autocomplete="off" value="" class="ant-select-search__field">
                                        <span class="ant-select-search__field__mirror">&nbsp;</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div></div></div></div>
                    <div class="RC-TextInput columns">
                <div class="column is-3">
                    <label class="css-ew3sm7">Location</label>
                </div><div class="column is-9">
                    <input type="text" name="kota" placeholder="" class="css-1jgqklf">
                    <span class="css-en8lkd"></span>
                </div>
            </div>
                                <div class="RC-TextArea columns">
                                    <div class="column is-3">
                                        <label class="css-ew3sm7">Biography</label>
                                    </div>
                                    <div class="column is-9">
                                        <textarea name="short_bio" placeholder="" class="css-p4boyr"></textarea>
                                        <span class="css-en8lkd">Share us something about yourself!</span>
                                    </div>
                                </div>
                                <h3 style="width: 100%; font-family: heading; height: 30px; font-size: 1.25rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74); margin-top: 30px; margin-bottom: 12px;">Experience</h3>
                                <div class="RC-TextInput columns"><div class="column is-3"><label class="css-ew3sm7">Title</label></div><div class="column is-9"><input type="text" name="experience" placeholder="Title" class="css-1jgqklf"><span class="css-en8lkd">e.g. Graphic Designer, Project Manager, etc</span></div></div>
                                <input type="submit" value="+ Add Experience" class="css-1rtk3im btn-primary-big">
                                <h3 style="width: 100%; font-family: heading; height: 30px; font-size: 1.25rem; font-weight: 600; text-align: left; color: rgb(74, 74, 74); margin-top: 30px; margin-bottom: 12px;">Portfolio</h3>
                                <div><div class="columns"><div class="column is-6"><div class="RC-TextInput columns"><div class="column is-3"><label class="css-ew3sm7">Portfolio Name</label></div><div class="column is-9"><input type="text" name="name" class="css-1jgqklf"><span class="css-en8lkd"></span></div></div></div><div class="column is-6"><div class="RC-TextInput columns"><div class="column is-3"><label class="css-ew3sm7">Link</label></div><div class="column is-9"><input type="text" name="portfolio class="css-1jgqklf"><span class="css-en8lkd"></span></div></div></div></div></div>
                                <input type="submit" value="+ Add Portfolio" class="css-1rtk3im btn-primary-big"></div></div><input type="submit" value="Save Settings" class="css-wqksia btn-primary-big">
                            </div></div>
    </div>




    </form>
