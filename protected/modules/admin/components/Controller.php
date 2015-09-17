<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='/layouts/template';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	

	public function filterAccessAuth($filterChain) { 
	

		if((Yii::app()->controller->id=='index' && $this->getAction()->getId()=='login') || (Yii::app()->controller->id=='resource')){
			$filterChain->run();
		}else{
			if(Yii::app()->user->getIsGuest()){
				
				$this->redirect(Yii::app()->params['loginUrl']);  
			}else{
				if(in_array('all',Yii::app()->user->user_group)){
					$filterChain->run();
				}else if(in_array(Yii::app()->controller->id,Yii::app()->user->user_group)){
					$filterChain->run();
				}else{
					$this->render('/site/showgroup',array('returnUrl'=>Yii::app()->params['returnUrl']));
					$this->redirect(Yii::app()->params['returnUrl']);  
				}
			}
		}

		/*
		   $filterChain->run();  
		   exit;
			echo Yii::app()->user->getIsGuest();
			exit;
            if(Yii::app()->user->getIsGuest() && !in_array($this->getAction()->getId(), $this->authlessActions())) {  
               // echo '请登录';
                //echo Yii::app()->controller->id;//获取控制器
                //echo $this->getAction()->getId();//获取action
                echo $this->getModule()->user->loginUrl;
                 Yii::app()->params['loginUrl'];//登录地址
                 Yii::app()->params['returnUrl'];//登录跳转页面
                exit;
                Yii::app()->user->loginRequired();  //封装了Yii::app()->user->loginUrl  
            }  
            
            
		/*
            elseif(!in_array($this->getAction()->getId(), $this->authlessActions()) && $this->current_user && $this->current_user->isPasswordExpired()) {  
                $this->user->setFlash('error', "你的密码已经过期，超过: " . Yii::app()->params['user_pwd_max_expire_day'] . "天没有修改，请修改密码");  
                $this->redirect($this->createUrl("/account/profile"));  
            }  
              
            if(!in_array($this->getAction()->getId(), $this->authlessActions()) && $this->current_user && $this->current_user->hi_id == NULL) {  
                $target_url = $this->createUrl('account/profile');  
                $this->user->setFlash('info', "你还没有设置Hi，请尽快到" . "<a href=\"$target_url\">  账号设置  </a>" . "添加！");    
            }  
      
            $filterChain->run();  
            */
    }  
      
    public function filters() {  
            return array(  
                'accessAuth',  
            );  
    }  
      
    public function authlessActions() {  
            return array();  
    }  
}