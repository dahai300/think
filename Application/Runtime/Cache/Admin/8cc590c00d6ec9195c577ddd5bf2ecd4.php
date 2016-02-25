<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>列表</title>
	<link href="/Public/admin/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/admin/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/admin/assets/css/page-min.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    	.search-cn{ padding: 20px 20px 0 20px}
    	.sdiv{ display: block; background: #f2f2f2; margin:0 auto; border:1px solid #e7e7e7; width: 100%; text-indent: 15px; height: 30px; line-height: 30px; padding: 5px 0; border-radius: 4px; -webkit-border-radius: 4px; }
		.sdiv i{ font-size: 14px; font-style: normal;}
		.sdiv select{ height: 30px; line-height: 30px;}
		.sdiv input[type='text']{width:30%;}
		.sdiv input[type='submit']{vertical-align:top;}
    </style>
</head>
<body>
<div class="container">
    <div id="grid"></div>  
</div>

<script type="text/javascript" src="/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="/Public/admin/assets/js/bui.js"></script>
<script type="text/javascript" src="/Public/admin/assets/js/config-min.js"></script>
<script type="text/javascript">
	BUI.use('common/page');
</script>
<script type="text/javascript">
	var dataUrl='<?php echo U("Jdt/lists");?>',Jdt_add='<?php echo U(MODULE_NAME."/Jdt/add");?>',editUrl='<?php echo U(MODULE_NAME."/Jdt/edit",'','');?>',pRoot='';
</script>

<script type="text/javascript">
  BUI.use(['bui/grid','bui/data'],function (Grid,Data) {
    var Grid = BUI.Grid,
    Store = BUI.Data.Store;
    var columns = [{title: '编号',dataIndex: 'id',sortable: true, width:"50px"},
            {title : '缩略图',dataIndex :'img',renderer:function(value,obj){
              var imgstr=pRoot+"/Data/Uploads/s_"+obj.img;
              return '<img src='+imgstr+'>';
            }},
            {title : '描述',dataIndex :'name'},
            {title : '链接',dataIndex :'links', width:"40%"},
            {title:'操作',dataIndex:'',renderer : function(value,obj){
              var id=obj.id,
              eaUrl=editUrl+'/id/'+id,
              editStr1 = '<span class="grid-command btn-edit" title="编辑信息"><a href="'+eaUrl+'">编辑</a></span>';
            return  editStr1;
          }}
          ],
      store = new Data.Store({
        url: dataUrl,
        autoLoad: true
      }),
      grid = new Grid.Grid({
        render : '#grid',
        columns : columns,
        width : '100%',
       // forceFit : true,
        store : store,
      });
    grid.render();
   
  });
</script>
</body>
</html>