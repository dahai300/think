<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>产品列表</title>
	<link href="/hzyj/Public/admin/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="/hzyj/Public/admin/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="/hzyj/Public/admin/assets/css/page-min.css" rel="stylesheet" type="text/css" />
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
<div class="search-cn">
	<div class="sdiv">
		<form action="<?php echo U(MODULE_NAME.'/Product/slists');?>" method="post" id="stitleForm">
			<i>按名称搜索：</i>
			<input type="text" name="keywords" />
			<input type="submit" value="搜索" class="button button-primary" />
		</form>
	</div>
</div>
<div class="container">
       <div id="grid"></div>  
</div>

<script type="text/javascript" src="/hzyj/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="/hzyj/Public/admin/assets/js/bui.js"></script>
<script type="text/javascript" src="/hzyj/Public/admin/assets/js/config-min.js"></script>
<script type="text/javascript">
	BUI.use('common/page');
</script>
<script type="text/javascript">
	var dataUrl='<?php echo U("Product/slists");?>',proAdd='<?php echo U(MODULE_NAME."/Product/addProduct");?>',delUrl='<?php echo U(MODULE_NAME."/Product/remove");?>',editUrl='<?php echo U(MODULE_NAME."/Product/edit",'','');?>',deleleUrl='<?php echo U(MODULE_NAME."/Product/delete",'','');?>',pRoot='/hzyj';
</script>
<script type="text/javascript">
  BUI.use(['bui/grid','bui/data'],function (Grid,Data) {
    var Grid = BUI.Grid,
    Store = BUI.Data.Store,
    columns = [{title: '缩略图',dataIndex: 'photo',renderer : function(value,obj){
    				var thumbstr='<img src="'+pRoot+'/Data/Uploads/s_'+obj.photo+'" width="40" height="40"';
    				return thumbstr;
    			}},
            {title : '名称', width:'40%',dataIndex :'name'},
            {title : '发布时间',dataIndex :'time',sortable: true,renderer : Grid.Format.dateRenderer},
            {title:'操作',dataIndex:'',renderer : function(value,obj){
              var id=obj.id,
              eaUrl=editUrl+'/id/'+id,daUrl=deleleUrl+'/id/'+id,
              editStr1 = '<span class="grid-command btn-edit" title="编辑信息"><a href="'+eaUrl+'">编辑</a></span>',
              delStr = '<span class="grid-command btn-del" title="删除信息"><a href="'+daUrl+'">删除</span>';
            return  editStr1 + delStr;
          }}
          ],
      store = new Store({
          url : dataUrl,
          proxy : {
            method : 'post',
            save:delUrl,
            /*save : {
             // addUrl : 'data/add.php',
              removeUrl : delUrl,
            //  updateUrl : 'data/update.php'
            }*/
            limitParam : 'limit', //一页多少条记录
            pageIndexParam : 'p' //页码参数，默认pageIndex
          },
          autoLoad: true,
          autoSync : true,
          pageSize: 12  // 配置分页数目
      }),
      editing = new Grid.Plugins.DialogEditing({
        //contentId : 'content',
        //triggerCls : 'btn-edit'
      }),
      grid = new Grid.Grid({
        render : '#grid',
        columns : columns,
       width : '100%',
        // forceFit : true,
       // loadMask: true,
        store : store,
        plugins : [Grid.Plugins.CheckSelection,editing],
        tbar:{
            items : [
            {
              btnCls : 'button button-small',
              text : '<i class="icon-plus"></i>添加',
              listeners : {
                'click' : function(){
                  window.location.href=proAdd;
                }
              }
            },
            {
              btnCls : 'button button-small',
              text : '<i class="icon-remove"></i>删除',
              listeners : {
                'click' : delFunction
              }
            }]
        },
        bbar: {
                pagingBar: true
          },

      });
    grid.render();

    //删除选中的记录
        function delFunction(){
          var selections = grid.getSelection(),
            ids = BUI.Array.map(selections,function (item) {
              return item.id;
            });
            if(selections.length<=0){
             // BUI.Message.Alert('没有选择记录','info');
              return;
            }
            //alert(ids)
         store.remove(selections);
         store.save('remove',{ids : ids.join(',')},function(){
          store.load()
         }); //save的第三个参数是回调函数
        } 


  });
</script>
</body>
</html>