<?php
<?php global $main; if(!is_user()) {
    echo "
        <div class='navbar navbar-user'>
            <ul>
                <li class='dropdown_user'>
                    <a >
                        <img src='uploads/avatars/".$main->user['user_avatar']."' alt='Гость' class='navbar-user-avatar img-circle'>Гость
                    </a>
                </li>
            </ul>
        </div> ";
} else {
    echo "
        <div class='navbar navbar-user'>
            <ul>
                <li class='dropdown_user'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                        <img src='uploads/avatars/".$main->user['user_avatar']."' alt='".$main->user['user_name']."' class='navbar-user-avatar'>".((!empty($main->user['user_first_name'])) ? $main->user['user_first_name']." ".$main->user['user_last_name'] : $main->user['user_name'])."
                    </a>
                    <br>
                    <ul class='dropdown-menu dropdown-menu-right'>
                        <li><a href='index.php?module=account'><i class='fa fa-user fa-fw'></i> Мой профиль</a></li>
                        <li><a href='index.php?module=account&do=controls'><i class='fa fa-cogs fa-fw'></i> Личные настройки</a></li>
                        <li><a href='index.php?module=account&do=favorite'><i class='fa fa-cogs fa-cloud'></i> Закладки</a></li>
                        <li class='divider'></li>
                        <li><a href='index.php?module=account&do=logout'><i class='fa fa-sign-out fa-fw'></i> Выйти</a></li>
                    </ul>
                </li>
            </ul>
        </div> ";
} ?>