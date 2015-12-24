<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class CourseViewModel extends ViewModel {

	//视图显示具体的课程内容，涵盖三张表 教程表、教程分类、步骤内容
     'course'=>array('cid','cname','ctitle','cimg'),
     'type'=>array('tid'=>'typeid','tname', '_on'=>'course.ctypeid=type.tid'),
     'step'=>array('sid', 'scontent','_on'=>'step.scourseid=course.cid'),
   );
 }
