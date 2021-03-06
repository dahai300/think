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

<div class="search-cn">
  <div class="sdiv">
    <form id="searchForm" class="form-horizontal" tabindex="0" style="outline: none;">
      <i>按职位搜索：</i>
      <input type="text" name="title"  class="control-text" />
      <button  type="button" id="btnSearch" class="button button-primary">搜索</button>
    </form>
  </div>
</div>
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
	var dataUrl='<?php echo U("Recruit/lists");?>',recruit_add='<?php echo U(MODULE_NAME."/Recruit/add");?>',delUrl='<?php echo U(MODULE_NAME."/Recruit/remove");?>',editUrl='<?php echo U(MODULE_NAME."/Recruit/edit",'','');?>',deleleUrl='<?php echo U(MODULE_NAME."/Recruit/delete",'','');?>',pRoot='';
</script>

<script type="text/javascript">
  BUI.use(['common/search','common/page'],function (Search) {
    var Grid = BUI.Grid,
    Store = BUI.Data.Store;
    var columns = [{title: '编号',dataIndex: 'id',sortable: true,renderer : function(value,obj){
    			var myDate = new Date();
		    	return myDate.getFullYear().toString()+obj.id;
		    }},
            {title : '职位名称', width:'40%',dataIndex :'title'},
            {title : '公司性质',dataIndex :'cotype'},
            {title : '联系人',dataIndex :'contacter'},
            {title : '联系电话',dataIndex :'contacttel'},
            {title : '发布时间',dataIndex :'time',sortable: true,renderer : Grid.Format.dateRenderer},
            {title:'操作',dataIndex:'',renderer : function(value,obj){
              var id=obj.id,
              eaUrl=editUrl+'/id/'+id,daUrl=deleleUrl+'/id/'+id,
              editStr1 = '<span class="grid-command btn-edit" title="编辑信息"><a href="'+eaUrl+'">编辑</a></span>',
              delStr = '<span class="grid-command btn-del" title="删除信息"><a href="'+daUrl+'">删除</span>';
            return  editStr1 + delStr;
          }}
          ],
     store = Search.createStore(dataUrl,{
      proxy : {
            method : 'post',
            save:delUrl,
            limitParam : 'limit', //一页多少条记录
            pageIndexParam : 'p' //页码参数，默认pageIndex
          },
          autoLoad: true,
          pageSize: 12  // 配置分页数目
     }),
      gridCfg = Search.createGridCfg(columns,{
        width : '100%',
        //forceFit : true,
        tbar : {
          items : [
            {text : '<i class="icon-plus"></i>添加',btnCls : 'button button-small',handler : addFunction},
            {text : '<i class="icon-remove"></i>删除',btnCls : 'button button-small',handler : delFunction}
          ]
        },
        bbar: {
                pagingBar: true
          },
        plugins : [BUI.Grid.Plugins.CheckSelection]
      });
 
    var  search = new Search({
        store : store,
        gridCfg : gridCfg
      }),
      grid = search.get('grid');
    


      function addFunction(){
        window.location.href=recruit_add;
      }

    //删除操作
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
 
    //监听事件，删除一条记录
    grid.on('cellclick',function(ev){
      var sender = $(ev.domTarget); //点击的Dom
      if(sender.hasClass('btn-del')){
        var record = ev.record;
        delItems([record]);
      }
    });
  });
</script>
</body>
</html>