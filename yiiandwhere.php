<?php 
public function actionOperat()
    {
        //$_model = GroPush::getAll(['channel_id' => '0'],'person_id,channel_id,id','',['between','id',7,10],['id' => SORT_DESC]);
        //$_model = GroPush::find()->where(['channel_id' => '888'])->andwhere(['or',['>','id',17],['<','id','18']])->asArray()->all();
        //print_r($_model);
        $_model = GroPush::find()
            ->andWhere(['!=','act_num','1'])
            ->andWhere(['is not','channel_id',null])
            ->andWhere(['>','id',15])
            ->andWhere(['<','id',20])
            ->andWhere(['between','end_time','1515462718','1515552820'])
            ->asArray()
            ->All();
        print_r($_model);
    }