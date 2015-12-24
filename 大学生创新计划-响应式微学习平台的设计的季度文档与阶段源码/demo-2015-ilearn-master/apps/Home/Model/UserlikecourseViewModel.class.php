<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class UserlikecourseViewModel extends ViewModel {

//视图显示用户收录的教程
   public $viewFields = array( 
   	 'userlikecourse'=>array('likeid','likeuserid', 'likecourseid','liketime'),
     'course'=>array('cid','cname','ctitle','_on'=>'userlikecourse.likecourseid=course.cid'),
   'type'=>array('tid','tname', '_on'=>'course.ctypeid=type.tid'),
   );
 }
