<div class="sidebar" data-background-color="white" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/admin/index.php" class="simple-text"><?php echo $_SESSION['userInfo']['username']?></a>
            </div>

            <ul class="nav ">
				<?php
					
					$url2=$_SERVER['REQUEST_URI'];
				?>
            	<li >
					<?php 
					
						if($url2=='/admin/cat/index.php'){
							$class="active";
						}
					?>
                    <a href="/admin/cat/index.php">
                        <i class="ti-map "></i>
                        <p class="<?php echo $class?>">Quản lý danh mục</p>
                    </a>
                </li>
            	 <li>
					<?php
						if($url2=='/admin/user/index.php'){
							$class2="active";
						}
					?>
                    <a href="/admin/user/index.php">
                        <i class="ti-view-list-alt"></i>
                        <p class="<?php echo $class2?>">Quản lý người dùng</p>
                    </a>
                </li>
                <li>
					<?php
						if($url2=='/admin/news/index.php'){
							$class3="active";
						}
					?>
                    <a href="/admin/news/index.php">
                        <i class="ti-panel"></i>
                        <p class="<?php echo $class3 ?>" >Quản lý tin tức</p>
                    </a>
                </li>
                <li>
					<?php
						if($url2=='/admin/comments/index.php'){
							$class4="active";
						}
					?>
                    <a href="/admin/comments/index.php">
                        <i class="ti-user"></i>
                        <p class="<?php echo $class4 ?>">Quản lý bình luận</p>
                    </a>
                </li>
				<li>
					<?php
						if($url2=='/admin/contact/index.php'){
							$class5="active";
						}
					?>
                    <a href="/admin/contact/index.php">
                        <i class="ti-email"></i>
                        <p class="<?php echo $class5 ?>">Quản lý liên hệ</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>