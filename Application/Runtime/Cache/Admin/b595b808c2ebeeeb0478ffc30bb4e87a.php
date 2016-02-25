<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title>TP管理系统</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="/Public/admin/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
  <link href="/Public/admin/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="/Public/admin/assets/css/main-min.css" rel="stylesheet" type="text/css" />
 </head>
 <body>

  <div class="header">
      <div class="dl-title">
       TP管理系统
      </div>

    <div class="dl-log"><span><a href="/" style="color:#c1d5ec; padding-right:8px;" target="_blank">浏览首页&nbsp;|</a></span>欢迎您，<span class="dl-log-user"><?php echo ($username); ?></span><a href="<?php echo U(MODULE_NAME.'/Login/logout');?>" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>
      <ul id="J_Nav"  class="nav-list ks-clear">
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">常用操作</div></li>  
        		<li class="nav-item dl-selected"><div class="nav-item-inner nav-order">管理</div></li>		    
      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
  <script type="text/javascript" src="/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="/Public/admin/assets/js/bui-min.js"></script>
  <script type="text/javascript" src="/Public/admin/assets/js/common/main-min.js"></script>
  <script type="text/javascript" src="/Public/admin/assets/js/config-min.js"></script>
  <script type="text/javascript">
    var tp_welcome='<?php echo U(MODULE_NAME.'/Public/welcome');?>',recruit_add='<?php echo U(MODULE_NAME.'/Recruit/add');?>',recruitlist='<?php echo U(MODULE_NAME.'/Recruit/index');?>',resumerlist='<?php echo U(MODULE_NAME.'/Resumer/index');?>',resumer_add='<?php echo U(MODULE_NAME.'/Resumer/add');?>',applylist='<?php echo U(MODULE_NAME.'/Apply/index');?>',tp_pwd='<?php echo U(MODULE_NAME.'/Public/changePwd');?>',tp_cache='<?php echo U(MODULE_NAME.'/Public/cacheBuild');?>',tp_dbbak='<?php echo U(MODULE_NAME.'/Public/dbBak');?>',tp_reset='<?php echo U(MODULE_NAME.'/Public/dbBak');?>',jdts='<?php echo U(MODULE_NAME.'/Jdt/index');?>';

  </script>
  <script>
    BUI.use('common/main',function(){
      var config = [
        {
          id:'1',
          homePage : '100',
          menu:[{
            text:'首页',
            items:[
            {id:'100',text:'首页',href:tp_welcome,closeable : false}
            ]
          },
          {
            text:'猎头职位',
            items:[
            {id:'110',text:'职位列表',href:recruitlist},
            {id:'111',text:'职位添加',href:recruit_add}
            ]
          },
          {
            text:'千里马档案库',
            items:[
            {id:'120',text:'人才列表',href:resumerlist},
            {id:'121',text:'人才添加',href:resumer_add}
            ]
          },
          {
            text:'在线简历',
            items:[
            {id:'130',text:'在线简历',href:applylist},
            ]
          },
          {
            text:'幻灯片管理',
            items:[
            {id:'140',text:'幻灯片',href:jdts}
            ]
          }
          ]
        },
        {
          id:'2',
          homePage : '200',
          menu:[{
            text:'操作',
            items:[
            {id:'200',text:'SEO设置',href:tp_reset,closeable : false},
            {id:'201',text:'密码修改',href:tp_pwd},
            {id:'202',text:'缓存生成',href:tp_cache},
            {id:'203',text:'数据库备份',href:tp_dbbak}
            ]
          }]
        }
    ];
      new PageUtil.MainPage({
        modulesConfig : config
      });
    });
  </script>
 </body>
</html>