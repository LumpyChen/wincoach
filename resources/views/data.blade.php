@extends('app')

@section('content')
	<!-- news begin -->
    <link rel="stylesheet" href="{{ asset('css/data.css') }}">
	<div id="data"  style="background:url( {{ asset('image/back.jpg') }} )" >
		
		<div class="data-display">
			<div class="row" style="margin:0;">
				<div class="col-md-6" id="great-data-1">
					<h3><b>大数据中心介绍</b></h3>
					<p>  <strong>&nbsp;  &nbsp; &nbsp;&nbsp; &nbsp; 此处应该有一堆,文本此处应该有一堆文本此处应该有一堆文本此处应该有一堆文本此处应该有一堆文本
					此处应该有一堆文本此处应该有一堆文.<br>&nbsp;  &nbsp; &nbsp;&nbsp; &nbsp; 本应该有一,堆文本此处应该有一堆文本此处应该有一堆文本此处应该有一处应该有一堆文本此处应该有一堆文本此处应该有一堆文本此.<br>&nbsp;  &nbsp; &nbsp;&nbsp; &nbsp; 本此处应该有一堆文本此处.</strong></p>
					<br><br>
					<!-- <div class="link-more"><a href="">更多>></a></div> -->
				</div>
				<div class="col-md-3" id="great-data-2">
					<h3><b>数据之星</b></h3>
                    <p id="star"><strong>马季奇</strong></p>
				    <!-- <i class="train-icon"></i> -->
                    <img src="image/majiqi.jpg"  alt="" >
                    
                        <span>射门:5次</span>
                        <span>射正:3次</span>
                        <span>进球:1</span>                 
                        <span>威胁传球数:3</span>
                        <span>跑动距离:8.9km</span>
                   
                			
					
					<!-- <div class="link-more"><a href="">更多>></a></div> -->
				</div>
				<div class="col-md-3" id="great-data-3">
					<h3><b>你知道吗？</b></h3>
					<img src="image/guoan.png"  alt="">
	                 <span class="great-data-3-span-1"><a href="">谢菲联曾离中超只一步之遥！</a></span><br>				
                      <span class="great-data-3-span-2">
                          <a href="">谢菲尔德联足球俱乐部（Sheffield United Football Club）是位于英格兰北部南约克郡设菲尔德的两支著名职业足球队之一...</a>
                      </span>
					<br><br>
					<!-- <div class="link-more"><a href="">更多>></a></div> -->
				</div>
			</div>
		</div>
	</div>
	   <div class="data-select">
		<ul id="myTab" class="nav nav-tabs">
            <li class="active">                        
              
               <span class="saicheng"><a href="#yingchao_saicheng" data-toggle="tab" ><strong>英超赛程</strong></a></span>
                
            <span class="jifen"><a href="#yingchao_jifen" data-toggle="tab"><strong >积分</strong></a></span>                      
            </li>
          
            <li>
              <span class="saicheng"><a href="#xijia_saicheng" data-toggle="tab"><strong >西甲赛程</strong></a></span>
           
              <span class="jifen"><a href="#xijia_jifen" data-toggle="tab"><strong>积分</strong></a> </span> 
            </li>
              
            <li>
                  <span class="saicheng"><a href="#dejia_saicheng" data-toggle="tab"><strong id="dejia-saicheng-color" onclick="dejia_">德甲赛程</strong></a></span>
           
                  <span class="jifen"><a href="#dejia_jifen" data-toggle="tab"><strong>积分</strong></a></span>
            </li>

            <li>
                  <span class="saicheng"><a href="#zhongchao_saicheng" data-toggle="tab"><strong>中超赛程</strong></a></span>
            
                  <span class="jifen"><a href="#zhongchao_jifen" data-toggle="tab"><strong>积分</strong></a></span>
            </li>
            <li>
                  <span class="saicheng"><a href="#ouguan_saicheng" data-toggle="tab"><strong>欧冠赛程</strong></a></span>
            
                  <span class="jifen"><a href="#ouguan_jifen" data-toggle="tab"><strong>积分</strong></a></span>
            </li>
        </ul>
<div id="TabContent1" class="tab-content">
<!-- 英超赛程开始 -->
   <div class="tab-pane fade in active" id="yingchao_saicheng">

			<div class="data-table">
					<div id="#">
		   <div class="schedule-nav udv-clearfix">
        <div class="sn-title">
         <table>
            <tbody><tr>
                <td>轮次</td>
            </tr>
        </tbody></table>
    </div>
    <div class="sn-list">
        <ul class="udv-clearfix">
            
            <li >1</li>
            
            <li>2</li>
            
            <li>3</li>
            
            <li>4</li>
            
            <li>5</li>
            
            <li>6</li>
            
            <li>7</li>
            
            <li class="current">8</li>
            
            <li>9</li>
            
            <li>10</li>
            
            <li>11</li>
            
            <li>12</li>
            
            <li>13</li>
            
            <li>14</li>
            
            <li>15</li>
            
            <li>16</li>
            
            <li>17</li>
            
            <li>18</li>
            
            <li>19</li>
            
            <li>20</li>
            
            <li>21</li>
            
            <li>22</li>
            
            <li>23</li>
            
            <li>24</li>
            
            <li>25</li>
            
            <li>26</li>
            
            <li>27</li>
            
            <li>28</li>
            
            <li>29</li>
            
            <li>30</li>
            
            <li>31</li>
            
            <li>32</li>
            
            <li>33</li>
            
            <li>34</li>
            
            <li>35</li>
            
            <li>36</li>
            
            <li>37</li>
            
            <li>38</li>
            
        </ul>
    </div>
</div>
</div>
		<div id="#"><div class="schedule-round">
    <div class="current"><span>第8轮</span><i></i></div>
    <div class="sr-ctr">
        <div class="sr-ctr-in udv-clearfix">
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 19:45</p>
                    <p class="team_2" style="text-align:right;"><img src="img/31.png">&nbsp;水晶宫<span>2</span></p>
                   <p class="team_2"><img src="img/35.png">&nbsp;西布朗<span>0</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                   
                </div> 
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/7.png">&nbsp;阿斯顿维拉<span>0</span></p>
                    <p class="team_2"><img src="img/110.png">&nbsp;斯托克城<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/91.png">&nbsp;伯恩茅斯</a><span>1</span></p>
                    <p class="team_2"><img src="img/57.png">&nbsp;沃特福德</a><span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/43.png">&nbsp;曼城<span>6</span></p>
                    <p class="team_2"><img src="img/4.png">&nbsp;纽卡斯尔<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/45.png">&nbsp;诺维奇<span>1</span></p>
                    <p class="team_2"><img src="img/13.png">&nbsp;莱斯特<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/56.png">&nbsp;桑德兰<span>2</span></p>
                    <p class="team_2"><img src="img/21.png">&nbsp;西汉姆联<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 00:30</p>
                    <p class="team_2"><img src="img/8.png">&nbsp;切尔西<span>1</span></p>
                    <p class="team_2"><img src="img/20.png">&nbsp;南安普敦<span>3</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 20:30</p>
                    <p class="team_2"><img src="img/11.png">&nbsp;埃弗顿<span>1</span></p>
                    <p class="team_2"><img src="img/14.png">&nbsp;利物浦<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 23:00</p>
                    <p class="team_2"><img src="img/3.png">&nbsp;阿森纳<span>3</span></p>
                    <p class="team_2"><img src="img/1.png">&nbsp;曼联<span>0</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 23:00</p>
                    <p class="team_2"><img src="img/80.png">&nbsp;斯旺西<span>2</span></p>
                    <p class="team_2"><img src="img/6.png">&nbsp;热刺<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
        </div>
    </div>
</div>
</div>
		</div>	
	    
   </div>

<!-- 英超赛程结束 -->
<!-- 英超积分开始 -->
   <div class="tab-pane fade" id="yingchao_jifen">
   <div class="title">
   <h3>积分榜</h3>
      <form action="">
				
				<select name="" id="">
					<option value="1">2015/16赛季</option>
					<option value="2">2014/15赛季</option>
					<option value="3">2013/14赛季</option>
					<option value="4">2012/13赛季</option>
				</select>
				
				<button class="btn-data" type="submit">搜索</button>
			</form>
    </div>
			<div class="data-table">
			<table> 				
				<tr class="tr1">
				    <td class="t1">排名</td>
					<td class="t2">球队</td>
					<td class="t-next">场次</td>
					<td class="t-next">积分</td>
					<td class="t-next">胜</td>
					<td class="t-next">平</td>
				    <td class="t-next">负</td>
					<td class="t-next">进球</td>
					<td class="t-next">失球</td>
					<td class="t-next">净胜球</td>
				</tr>
				
				<tr>
				    <td><span>1</span></td>
					<td><img src="img/43.png">曼城</td>
					<td>8</td>
					<td>18</td>
					<td>6</td>
					<td>0</td>
				    <td>2</td>
					<td>19</td>
					<td>7</td>
					<td>12</td>
				</tr>
				<tr>
				    <td><p class="p1">2</p></td>
					<td><img src="img/3.png">阿森纳</td>
					<td>8</td>
					<td>16</td>
					<td>5</td>
					<td>1</td>
				    <td>2</td>
					<td>13</td>
					<td>7</td>
					<td>6</td>
				</tr>
				<tr>
				     <td><p class="p2">3</p></td>
				     <td><img src="img/1.png">曼联</td>
				     <td>8</td>
				     <td>16</td>
				     <td>5</td>
				     <td>1</td>
				     <td>2</td>
				     <td>12</td>
				     <td>8</td>
				     <td>4</td>
				</tr>
				<tr>
				   <td>4</td>
                   <td><img src="img/31.png">水晶宫</td>
                <td>8</td>
                <td>15</td>
                <td>5</td>
                <td>0</td>
                <td>3</td>
                <td>11</td>
                <td>7</td>
                <td>4</td>
				</tr>
				<tr>
				    <td>5</td>
				    <td><img src="img/13.png" >莱斯特</td>
                <td>8</td>
                <td>15</td>
                <td>4</td>
                <td>3</td>
                <td>1</td>
                <td>17</td>
                <td>15</td>
                <td>2</td>
				</tr>
				<tr>
				    <td>6</td>
				    <td><img src="img/21.png" >西汉姆联</td>
                <td>8</td>
                <td>14</td>
                <td>4</td>
                <td>2</td>
                <td>2</td>
                <td>17</td>
                <td>11</td>
                <td>6</td>

				</tr>
				<tr>
				    <td>7</td>
                <td><img src="img/11.png">埃弗顿</td>
                <td>8</td>
                <td>13</td>
                <td>3</td>
                <td>4</td>
                <td>1</td>
                <td>12</td>
                <td>8</td>
                <td>4</td>
				</tr>
				<tr>
				        <td>8</td>
                <td><img src="img/6.png" >热刺</td>
                <td>8</td>
                <td>13</td>
                <td>3</td>
                <td>4</td>
                <td>1</td>
                <td>11</td>
                <td>7</td>
                <td>4</td>
				</tr>
				<tr>
				    <td>9</td>
                <td><img src="img/20.png">南安普敦</td>
                <td>8</td>
                <td>12</td>
                <td>3</td>
                <td>3</td>
                <td>2</td>
                <td>13</td>
                <td>10</td>
                <td>3</td>
				</tr>
				<tr>
				    <td>10</td>
                <td><img src="img/14.png">利物浦</a></td>
                <td>8</td>
                <td>12</td>
                <td>3</td>
                <td>3</td>
                <td>2</td>
                <td>8</td>
                <td>10</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>11</td>
                <td><img src="img/80.png">斯旺西</a></td>
                <td>8</td>
                <td>10</td>
                <td>2</td>
                <td>4</td>
                <td>2</td>
                <td>10</td>
                <td>10</td>
                <td>0</td>

				</tr>
				<tr>
				    <td>12</td>
                <td><img src="img/57.png">沃特福德</a></td>
                <td>8</td>
                <td>10</td>
                <td>2</td>
                <td>4</td>
                <td>2</td>
                <td>6</td>
                <td>7</td>
                <td>-1</td>
				</tr>
				<tr>
				     <td>13</td>
                <td><img src="img/45.png">诺维奇</a></td>
                <td>8</td>
                <td>9</td>
                <td>2</td>
                <td>3</td>
                <td>3</td>
                <td>12</td>
                <td>14</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>14</td>
                <td><img src="img/110.png">斯托克城</td>
                <td>8</td>
                <td>9</td>
                <td>2</td>
                <td>3</td>
                <td>3</td>
                <td>8</td>
                <td>10</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>15</td>
                <td><img src="img/91.png">伯恩茅斯</td>
                <td>8</td>
                <td class="bg-eee">8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>10</td>
                <td>12</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>16</td>
                <td><img src="img/8.png">切尔西</a></td>
                <td>8</td>
                <td>8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>12</td>
                <td>17</td>
                <td>-5</td>
				</tr>
				<tr>
				    <td>17</td>
                <td><img src="img/35.png">西布朗</a></td>
                <td>8</td>
                <td>8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>6</td>
                <td>11</td>
                <td>-5</td>
				</tr>
				<tr>
				    <td>18</td>
                <td><img src="img/7.png">阿斯顿维拉</a></td>
                <td>8</td>
                <td>4</td>
                <td>1</td>
                <td>1</td>
                <td>6</td>
                <td>8</td>
                <td>13</td>
                <td>-5</td>
				</tr>
				<tr>
				     <td>19</td>
                <td><img src="img/56.png">桑德兰</a></td>
                <td>8</td>
                <td>3</td>
                <td>0</td>
                <td>3</td>
                <td>5</td>
                <td>8</td>
                <td>18</td>
                <td>-10</td>
				</tr>
				<tr>
				    <td>20</td>
                <td><img src="img/4.png">纽卡斯尔</a></td>
                <td>8</td>
                <td>3</td>
                <td>0</td>
                <td>3</td>
                <td>5</td>
                <td>6</td>
                <td>17</td>
                <td>-11</td>
				</tr>

					
			</table>
		</div>	
   </div>
   <!-- 英超积分结束 -->
   <!-- 西甲赛程开始 -->
   <div class="tab-pane fade" id="xijia_saicheng">
         <div class="data-table">
			<div id="#">
		    <div class="schedule-nav udv-clearfix">
             <div class="sn-title">
             <table>
                <tbody>
                    <tr>
                        <td>轮次</td>
                      </tr>
             </tbody>
             </table>
            </div>
            <div class="sn-list">
            <ul class="udv-clearfix">
            
            <li >1</li>
            
            <li>2</li>
            
            <li>3</li>
            
            <li>4</li>
            
            <li>5</li>
            
            <li>6</li>
            
            <li  class="current">7</li>
            
            <li>8</li>
            
            <li>9</li>
            
            <li>10</li>
            
            <li>11</li>
            
            <li>12</li>
            
            <li>13</li>
            
            <li>14</li>
            
            <li>15</li>
            
            <li>16</li>
            
            <li>17</li>
            
            <li>18</li>
            
            <li>19</li>
            
            <li>20</li>
            
            <li>21</li>
            
            <li>22</li>
            
            <li>23</li>
            
            <li>24</li>
            
            <li>25</li>
            
            <li>26</li>
            
            <li>27</li>
            
            <li>28</li>
            
            <li>29</li>
            
            <li>30</li>
            
            <li>31</li>
            
            <li>32</li>
            
            <li>33</li>
            
            <li>34</li>
            
            <li>35</li>
            
            <li>36</li>
            
            <li>37</li>
            
            <li>38</li>
            
        </ul>
    </div>
</div>
</div>
<div id="#"><div class="schedule-round">
    <div class="current"><span>第7轮</span><i></i></div>
    <div class="sr-ctr">
        <div class="sr-ctr-in udv-clearfix">
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 02:30</p>
                    <p class="team_2" style="text-align:right;"><img src="img/176.png">&nbsp;维戈塞尔塔<span>0</span></p>
                   <p class="team_2"><img src="img/1450.png">&nbsp;赫塔菲<span>0</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                   
                </div> 
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/179.png">&nbsp;塞维利亚<span>2</span></p>
                    <p class="team_2"><img src="img/178.png">&nbsp;巴塞罗那<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 00:15</p>
                    <p class="team_2"><img src="img/5683.png">&nbsp;格拉纳达</a><span>1</span></p>
                    <p class="team_2"><img src="img/180.png">&nbsp;拉科鲁尼亚</a><span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 02:30</p>
                    <p class="team_2"><img src="img/177.png">&nbsp;西班牙人<span>1</span></p>
                    <p class="team_2"><img src="img/616.png">&nbsp;希洪竞技<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 04:00</p>
                    <p class="team_2"><img src="img/407.png">&nbsp;拉斯帕尔马斯<span>0</span></p>
                    <p class="team_2"><img src="img/953.png">&nbsp;埃瓦尔<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周日 04:05</p>
                    <p class="team_2"><img src="img/182.png">&nbsp;马拉加<span>3</span></p>
                    <p class="team_2"><img src="img/188.png">&nbsp;皇家社会<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 18:00</p>
                    <p class="team_2"><img src="img/184.png">&nbsp;巴列卡诺<span>0</span></p>
                    <p class="team_2"><img src="img/185.png">&nbsp;皇家贝蒂斯<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 22:00</p>
                    <p class="team_2"><img src="img/174.png">&nbsp;毕尔巴鄂竞技<span>3</span></p>
                    <p class="team_2"><img src="img/191.png">&nbsp;瓦伦西亚<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-05 周一 00:15</p>
                    <p class="team_2"><img src="img/855.png">&nbsp;莱万特<span>1</span></p>
                    <p class="team_2"><img src="img/1.png">&nbsp;比利亚雷亚尔<span>0</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-05 周一 02:30</p>
                    <p class="team_2"><img src="img/186.png">&nbsp;马德里竞技<span>1</span></p>
                    <p class="team_2"><img src="img/175.png">&nbsp;皇家马德里<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
        </div>
    </div>
</div>
</div>
		</div>	
   </div>
   <!-- 西甲赛程结束 -->
   <!-- 西甲积分开始 -->
   <div class="tab-pane fade" id="xijia_jifen">
        <div class="title">
   <h3>积分榜</h3>
      <form action="">
				
				<select name="" id="">
					<option value="1">2015/16赛季</option>
					<option value="2">2014/15赛季</option>
					<option value="3">2013/14赛季</option>
					<option value="4">2012/13赛季</option>
				</select>
				
				<button class="btn-data" type="submit">搜索</button>
			</form>
    </div>
			<div class="data-table">
			<table> 				
				<tr class="tr1">
				    <td class="t1">排名</td>
					<td class="t2">球队</td>
					<td class="t-next">场次</td>
					<td class="t-next">积分</td>
					<td class="t-next">胜</td>
					<td class="t-next">平</td>
				    <td class="t-next">负</td>
					<td class="t-next">进球</td>
					<td class="t-next">失球</td>
					<td class="t-next">净胜球</td>
				</tr>
				
				<tr>
				    <td><span>1</span></td>
					<td><img src="img/43.png">曼城</td>
					<td>8</td>
					<td>18</td>
					<td>6</td>
					<td>0</td>
				    <td>2</td>
					<td>19</td>
					<td>7</td>
					<td>12</td>
				</tr>
				<tr>
				    <td><p class="p1">2</p></td>
					<td><img src="img/3.png">阿森纳</td>
					<td>8</td>
					<td>16</td>
					<td>5</td>
					<td>1</td>
				    <td>2</td>
					<td>13</td>
					<td>7</td>
					<td>6</td>
				</tr>
				<tr>
				     <td><p class="p2">3</p></td>
				     <td><img src="img/1.png">曼联</td>
				     <td>8</td>
				     <td>16</td>
				     <td>5</td>
				     <td>1</td>
				     <td>2</td>
				     <td>12</td>
				     <td>8</td>
				     <td>4</td>
				</tr>
				<tr>
				   <td>4</td>
                   <td><img src="img/31.png">水晶宫</td>
                <td>8</td>
                <td>15</td>
                <td>5</td>
                <td>0</td>
                <td>3</td>
                <td>11</td>
                <td>7</td>
                <td>4</td>
				</tr>
				<tr>
				    <td>5</td>
				    <td><img src="img/13.png" >莱斯特</td>
                <td>8</td>
                <td>15</td>
                <td>4</td>
                <td>3</td>
                <td>1</td>
                <td>17</td>
                <td>15</td>
                <td>2</td>
				</tr>
				<tr>
				    <td>6</td>
				    <td><img src="img/21.png" >西汉姆联</td>
                <td>8</td>
                <td>14</td>
                <td>4</td>
                <td>2</td>
                <td>2</td>
                <td>17</td>
                <td>11</td>
                <td>6</td>

				</tr>
				<tr>
				    <td>7</td>
                <td><img src="img/11.png">埃弗顿</td>
                <td>8</td>
                <td>13</td>
                <td>3</td>
                <td>4</td>
                <td>1</td>
                <td>12</td>
                <td>8</td>
                <td>4</td>
				</tr>
				<tr>
				        <td>8</td>
                <td><img src="img/6.png" >热刺</td>
                <td>8</td>
                <td>13</td>
                <td>3</td>
                <td>4</td>
                <td>1</td>
                <td>11</td>
                <td>7</td>
                <td>4</td>
				</tr>
				<tr>
				    <td>9</td>
                <td><img src="img/20.png">南安普敦</td>
                <td>8</td>
                <td>12</td>
                <td>3</td>
                <td>3</td>
                <td>2</td>
                <td>13</td>
                <td>10</td>
                <td>3</td>
				</tr>
				<tr>
				    <td>10</td>
                <td><img src="img/14.png">利物浦</a></td>
                <td>8</td>
                <td>12</td>
                <td>3</td>
                <td>3</td>
                <td>2</td>
                <td>8</td>
                <td>10</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>11</td>
                <td><img src="img/80.png">斯旺西</a></td>
                <td>8</td>
                <td>10</td>
                <td>2</td>
                <td>4</td>
                <td>2</td>
                <td>10</td>
                <td>10</td>
                <td>0</td>

				</tr>
				<tr>
				    <td>12</td>
                <td><img src="img/57.png">沃特福德</a></td>
                <td>8</td>
                <td>10</td>
                <td>2</td>
                <td>4</td>
                <td>2</td>
                <td>6</td>
                <td>7</td>
                <td>-1</td>
				</tr>
				<tr>
				     <td>13</td>
                <td><img src="img/45.png">诺维奇</a></td>
                <td>8</td>
                <td>9</td>
                <td>2</td>
                <td>3</td>
                <td>3</td>
                <td>12</td>
                <td>14</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>14</td>
                <td><img src="img/110.png">斯托克城</td>
                <td>8</td>
                <td>9</td>
                <td>2</td>
                <td>3</td>
                <td>3</td>
                <td>8</td>
                <td>10</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>15</td>
                <td><img src="img/91.png">伯恩茅斯</td>
                <td>8</td>
                <td class="bg-eee">8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>10</td>
                <td>12</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>16</td>
                <td><img src="img/8.png">切尔西</a></td>
                <td>8</td>
                <td>8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>12</td>
                <td>17</td>
                <td>-5</td>
				</tr>
				<tr>
				    <td>17</td>
                <td><img src="img/35.png">西布朗</a></td>
                <td>8</td>
                <td>8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>6</td>
                <td>11</td>
                <td>-5</td>
				</tr>
				<tr>
				    <td>18</td>
                <td><img src="img/7.png">阿斯顿维拉</a></td>
                <td>8</td>
                <td>4</td>
                <td>1</td>
                <td>1</td>
                <td>6</td>
                <td>8</td>
                <td>13</td>
                <td>-5</td>
				</tr>
				<tr>
				     <td>19</td>
                <td><img src="img/56.png">桑德兰</a></td>
                <td>8</td>
                <td>3</td>
                <td>0</td>
                <td>3</td>
                <td>5</td>
                <td>8</td>
                <td>18</td>
                <td>-10</td>
				</tr>
				<tr>
				    <td>20</td>
                <td><img src="img/4.png">纽卡斯尔</a></td>
                <td>8</td>
                <td>3</td>
                <td>0</td>
                <td>3</td>
                <td>5</td>
                <td>6</td>
                <td>17</td>
                <td>-11</td>
				</tr>

					
			</table>
		</div>	
</div>
<!-- 西甲积分结束 -->
<!-- 德甲赛程开始 -->
<div class="tab-pane fade " id="dejia_saicheng">

			<div class="data-table">
					<div id="#">
		   <div class="schedule-nav udv-clearfix">
        <div class="sn-title">
         <table>
            <tbody><tr>
                <td>轮次</td>
            </tr>
        </tbody></table>
    </div>
    <div class="sn-list">
        <ul class="udv-clearfix">
            
            <li >1</li>
            
            <li>2</li>
            
            <li>3</li>
            
            <li>4</li>
            
            <li>5</li>
            
            <li>6</li>
            
            <li>7</li>
            
            <li class="current">8</li>
            
            <li>9</li>
            
            <li>10</li>
            
            <li>11</li>
            
            <li>12</li>
            
            <li>13</li>
            
            <li>14</li>
            
            <li>15</li>
            
            <li>16</li>
            
            <li>17</li>
            
            <li>18</li>
            
            <li>19</li>
            
            <li>20</li>
            
            <li>21</li>
            
            <li>22</li>
            
            <li>23</li>
            
            <li>24</li>
            
            <li>25</li>
            
            <li>26</li>
            
            <li>27</li>
            
            <li>28</li>
            
            <li>29</li>
            
            <li>30</li>
            
            <li>31</li>
            
            <li>32</li>
            
            <li>33</li>
            
            <li>34</li>
            
            <li>35</li>
            
            <li>36</li>
            
            <li>37</li>
            
            <li>38</li>
            
        </ul>
    </div>
</div>
</div>
		<div id="#"><div class="schedule-round">
    <div class="current"><span>第8轮</span><i></i></div>
    <div class="sr-ctr">
        <div class="sr-ctr-in udv-clearfix">
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 19:45</p>
                    <p class="team_2" style="text-align:right;"><img src="img/31.png">&nbsp;水晶宫<span>2</span></p>
                   <p class="team_2"><img src="img/35.png">&nbsp;西布朗<span>0</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                   
                </div> 
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/7.png">&nbsp;阿斯顿维拉<span>0</span></p>
                    <p class="team_2"><img src="img/110.png">&nbsp;斯托克城<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/91.png">&nbsp;伯恩茅斯</a><span>1</span></p>
                    <p class="team_2"><img src="img/57.png">&nbsp;沃特福德</a><span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/43.png">&nbsp;曼城<span>6</span></p>
                    <p class="team_2"><img src="img/4.png">&nbsp;纽卡斯尔<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/45.png">&nbsp;诺维奇<span>1</span></p>
                    <p class="team_2"><img src="img/13.png">&nbsp;莱斯特<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/56.png">&nbsp;桑德兰<span>2</span></p>
                    <p class="team_2"><img src="img/21.png">&nbsp;西汉姆联<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 00:30</p>
                    <p class="team_2"><img src="img/8.png">&nbsp;切尔西<span>1</span></p>
                    <p class="team_2"><img src="img/20.png">&nbsp;南安普敦<span>3</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 20:30</p>
                    <p class="team_2"><img src="img/11.png">&nbsp;埃弗顿<span>1</span></p>
                    <p class="team_2"><img src="img/14.png">&nbsp;利物浦<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 23:00</p>
                    <p class="team_2"><img src="img/3.png">&nbsp;阿森纳<span>3</span></p>
                    <p class="team_2"><img src="img/1.png">&nbsp;曼联<span>0</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 23:00</p>
                    <p class="team_2"><img src="img/80.png">&nbsp;斯旺西<span>2</span></p>
                    <p class="team_2"><img src="img/6.png">&nbsp;热刺<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
        </div>
    </div>
</div>
</div>
		</div>	
	    
   </div>
<!-- 德甲赛程结束 -->
<!-- 德甲积分开始 -->
   <div class="tab-pane fade" id="dejia_jifen">
   <div class="title">
   <h3>积分榜</h3>
      <form action="">
				
				<select name="" id="">
					<option value="1">2015/16赛季</option>
					<option value="2">2014/15赛季</option>
					<option value="3">2013/14赛季</option>
					<option value="4">2012/13赛季</option>
				</select>
				
				<button class="btn-data" type="submit">搜索</button>
			</form>
    </div>
			<div class="data-table">
			<table> 				
				<tr class="tr1">
				    <td class="t1">排名</td>
					<td class="t2">球队</td>
					<td class="t-next">场次</td>
					<td class="t-next">积分</td>
					<td class="t-next">胜</td>
					<td class="t-next">平</td>
				    <td class="t-next">负</td>
					<td class="t-next">进球</td>
					<td class="t-next">失球</td>
					<td class="t-next">净胜球</td>
				</tr>
				
				<tr>
				    <td><span>1</span></td>
					<td><img src="img/43.png">曼城</td>
					<td>8</td>
					<td>18</td>
					<td>6</td>
					<td>0</td>
				    <td>2</td>
					<td>19</td>
					<td>7</td>
					<td>12</td>
				</tr>
				<tr>
				    <td><p class="p1">2</p></td>
					<td><img src="img/3.png">阿森纳</td>
					<td>8</td>
					<td>16</td>
					<td>5</td>
					<td>1</td>
				    <td>2</td>
					<td>13</td>
					<td>7</td>
					<td>6</td>
				</tr>
				<tr>
				     <td><p class="p2">3</p></td>
				     <td><img src="img/1.png">曼联</td>
				     <td>8</td>
				     <td>16</td>
				     <td>5</td>
				     <td>1</td>
				     <td>2</td>
				     <td>12</td>
				     <td>8</td>
				     <td>4</td>
				</tr>
				<tr>
				   <td>4</td>
                   <td><img src="img/31.png">水晶宫</td>
                <td>8</td>
                <td>15</td>
                <td>5</td>
                <td>0</td>
                <td>3</td>
                <td>11</td>
                <td>7</td>
                <td>4</td>
				</tr>
				<tr>
				    <td>5</td>
				    <td><img src="img/13.png" >莱斯特</td>
                <td>8</td>
                <td>15</td>
                <td>4</td>
                <td>3</td>
                <td>1</td>
                <td>17</td>
                <td>15</td>
                <td>2</td>
				</tr>
				<tr>
				    <td>6</td>
				    <td><img src="img/21.png" >西汉姆联</td>
                <td>8</td>
                <td>14</td>
                <td>4</td>
                <td>2</td>
                <td>2</td>
                <td>17</td>
                <td>11</td>
                <td>6</td>

				</tr>
				<tr>
				    <td>7</td>
                <td><img src="img/11.png">埃弗顿</td>
                <td>8</td>
                <td>13</td>
                <td>3</td>
                <td>4</td>
                <td>1</td>
                <td>12</td>
                <td>8</td>
                <td>4</td>
				</tr>
				<tr>
				        <td>8</td>
                <td><img src="img/6.png" >热刺</td>
                <td>8</td>
                <td>13</td>
                <td>3</td>
                <td>4</td>
                <td>1</td>
                <td>11</td>
                <td>7</td>
                <td>4</td>
				</tr>
				<tr>
				    <td>9</td>
                <td><img src="img/20.png">南安普敦</td>
                <td>8</td>
                <td>12</td>
                <td>3</td>
                <td>3</td>
                <td>2</td>
                <td>13</td>
                <td>10</td>
                <td>3</td>
				</tr>
				<tr>
				    <td>10</td>
                <td><img src="img/14.png">利物浦</a></td>
                <td>8</td>
                <td>12</td>
                <td>3</td>
                <td>3</td>
                <td>2</td>
                <td>8</td>
                <td>10</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>11</td>
                <td><img src="img/80.png">斯旺西</a></td>
                <td>8</td>
                <td>10</td>
                <td>2</td>
                <td>4</td>
                <td>2</td>
                <td>10</td>
                <td>10</td>
                <td>0</td>

				</tr>
				<tr>
				    <td>12</td>
                <td><img src="img/57.png">沃特福德</a></td>
                <td>8</td>
                <td>10</td>
                <td>2</td>
                <td>4</td>
                <td>2</td>
                <td>6</td>
                <td>7</td>
                <td>-1</td>
				</tr>
				<tr>
				     <td>13</td>
                <td><img src="img/45.png">诺维奇</a></td>
                <td>8</td>
                <td>9</td>
                <td>2</td>
                <td>3</td>
                <td>3</td>
                <td>12</td>
                <td>14</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>14</td>
                <td><img src="img/110.png">斯托克城</td>
                <td>8</td>
                <td>9</td>
                <td>2</td>
                <td>3</td>
                <td>3</td>
                <td>8</td>
                <td>10</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>15</td>
                <td><img src="img/91.png">伯恩茅斯</td>
                <td>8</td>
                <td class="bg-eee">8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>10</td>
                <td>12</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>16</td>
                <td><img src="img/8.png">切尔西</a></td>
                <td>8</td>
                <td>8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>12</td>
                <td>17</td>
                <td>-5</td>
				</tr>
				<tr>
				    <td>17</td>
                <td><img src="img/35.png">西布朗</a></td>
                <td>8</td>
                <td>8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>6</td>
                <td>11</td>
                <td>-5</td>
				</tr>
				<tr>
				    <td>18</td>
                <td><img src="img/7.png">阿斯顿维拉</a></td>
                <td>8</td>
                <td>4</td>
                <td>1</td>
                <td>1</td>
                <td>6</td>
                <td>8</td>
                <td>13</td>
                <td>-5</td>
				</tr>
				<tr>
				     <td>19</td>
                <td><img src="img/56.png">桑德兰</a></td>
                <td>8</td>
                <td>3</td>
                <td>0</td>
                <td>3</td>
                <td>5</td>
                <td>8</td>
                <td>18</td>
                <td>-10</td>
				</tr>
				<tr>
				    <td>20</td>
                <td><img src="img/4.png">纽卡斯尔</a></td>
                <td>8</td>
                <td>3</td>
                <td>0</td>
                <td>3</td>
                <td>5</td>
                <td>6</td>
                <td>17</td>
                <td>-11</td>
				</tr>

					
			</table>
		</div>	
   </div>	
   <!-- 德甲积分结束 -->
   <!-- 中超赛程开始 -->
   <div class="tab-pane fade " id="zhongchao_saicheng">

			<div class="data-table">
					<div id="#">
		   <div class="schedule-nav udv-clearfix">
        <div class="sn-title">
         <table>
            <tbody><tr>
                <td>轮次</td>
            </tr>
        </tbody></table>
    </div>
    <div class="sn-list">
        <ul class="udv-clearfix">
            
            <li >1</li>
            
            <li>2</li>
            
            <li>3</li>
            
            <li>4</li>
            
            <li>5</li>
            
            <li>6</li>
            
            <li>7</li>
            
            <li class="current">8</li>
            
            <li>9</li>
            
            <li>10</li>
            
            <li>11</li>
            
            <li>12</li>
            
            <li>13</li>
            
            <li>14</li>
            
            <li>15</li>
            
            <li>16</li>
            
            <li>17</li>
            
            <li>18</li>
            
            <li>19</li>
            
            <li>20</li>
            
            <li>21</li>
            
            <li>22</li>
            
            <li>23</li>
            
            <li>24</li>
            
            <li>25</li>
            
            <li>26</li>
            
            <li>27</li>
            
            <li>28</li>
            
            <li>29</li>
            
            <li>30</li>
            
            <li>31</li>
            
            <li>32</li>
            
            <li>33</li>
            
            <li>34</li>
            
            <li>35</li>
            
            <li>36</li>
            
            <li>37</li>
            
            <li>38</li>
            
        </ul>
    </div>
</div>
</div>
		<div id="#"><div class="schedule-round">
    <div class="current"><span>第8轮</span><i></i></div>
    <div class="sr-ctr">
        <div class="sr-ctr-in udv-clearfix">
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 19:45</p>
                    <p class="team_2" style="text-align:right;"><img src="img/31.png">&nbsp;水晶宫<span>2</span></p>
                   <p class="team_2"><img src="img/35.png">&nbsp;西布朗<span>0</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                   
                </div> 
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/7.png">&nbsp;阿斯顿维拉<span>0</span></p>
                    <p class="team_2"><img src="img/110.png">&nbsp;斯托克城<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/91.png">&nbsp;伯恩茅斯</a><span>1</span></p>
                    <p class="team_2"><img src="img/57.png">&nbsp;沃特福德</a><span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/43.png">&nbsp;曼城<span>6</span></p>
                    <p class="team_2"><img src="img/4.png">&nbsp;纽卡斯尔<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/45.png">&nbsp;诺维奇<span>1</span></p>
                    <p class="team_2"><img src="img/13.png">&nbsp;莱斯特<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/56.png">&nbsp;桑德兰<span>2</span></p>
                    <p class="team_2"><img src="img/21.png">&nbsp;西汉姆联<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 00:30</p>
                    <p class="team_2"><img src="img/8.png">&nbsp;切尔西<span>1</span></p>
                    <p class="team_2"><img src="img/20.png">&nbsp;南安普敦<span>3</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 20:30</p>
                    <p class="team_2"><img src="img/11.png">&nbsp;埃弗顿<span>1</span></p>
                    <p class="team_2"><img src="img/14.png">&nbsp;利物浦<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 23:00</p>
                    <p class="team_2"><img src="img/3.png">&nbsp;阿森纳<span>3</span></p>
                    <p class="team_2"><img src="img/1.png">&nbsp;曼联<span>0</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 23:00</p>
                    <p class="team_2"><img src="img/80.png">&nbsp;斯旺西<span>2</span></p>
                    <p class="team_2"><img src="img/6.png">&nbsp;热刺<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
        </div>
    </div>
</div>
</div>
		</div>	
	    
   </div>
<!-- 中超赛程结束 -->
<!-- 中超积分开始 -->

   <div class="tab-pane fade" id="zhongchao_jifen">
   <div class="title">
   <h3>积分榜</h3>
      <form action="">
				
				<select name="" id="">
					<option value="1">2015/16赛季</option>
					<option value="2">2014/15赛季</option>
					<option value="3">2013/14赛季</option>
					<option value="4">2012/13赛季</option>
				</select>
				
				<button class="btn-data" type="submit">搜索</button>
			</form>
    </div>
			<div class="data-table">
			<table> 				
				<tr class="tr1">
				    <td class="t1">排名</td>
					<td class="t2">球队</td>
					<td class="t-next">场次</td>
					<td class="t-next">积分</td>
					<td class="t-next">胜</td>
					<td class="t-next">平</td>
				    <td class="t-next">负</td>
					<td class="t-next">进球</td>
					<td class="t-next">失球</td>
					<td class="t-next">净胜球</td>
				</tr>
				
				<tr>
				    <td><span>1</span></td>
					<td><img src="img/43.png">曼城</td>
					<td>8</td>
					<td>18</td>
					<td>6</td>
					<td>0</td>
				    <td>2</td>
					<td>19</td>
					<td>7</td>
					<td>12</td>
				</tr>
				<tr>
				    <td><p class="p1">2</p></td>
					<td><img src="img/3.png">阿森纳</td>
					<td>8</td>
					<td>16</td>
					<td>5</td>
					<td>1</td>
				    <td>2</td>
					<td>13</td>
					<td>7</td>
					<td>6</td>
				</tr>
				<tr>
				     <td><p class="p2">3</p></td>
				     <td><img src="img/1.png">曼联</td>
				     <td>8</td>
				     <td>16</td>
				     <td>5</td>
				     <td>1</td>
				     <td>2</td>
				     <td>12</td>
				     <td>8</td>
				     <td>4</td>
				</tr>
				<tr>
				   <td>4</td>
                   <td><img src="img/31.png">水晶宫</td>
                <td>8</td>
                <td>15</td>
                <td>5</td>
                <td>0</td>
                <td>3</td>
                <td>11</td>
                <td>7</td>
                <td>4</td>
				</tr>
				<tr>
				    <td>5</td>
				    <td><img src="img/13.png" >莱斯特</td>
                <td>8</td>
                <td>15</td>
                <td>4</td>
                <td>3</td>
                <td>1</td>
                <td>17</td>
                <td>15</td>
                <td>2</td>
				</tr>
				<tr>
				    <td>6</td>
				    <td><img src="img/21.png" >西汉姆联</td>
                <td>8</td>
                <td>14</td>
                <td>4</td>
                <td>2</td>
                <td>2</td>
                <td>17</td>
                <td>11</td>
                <td>6</td>

				</tr>
				<tr>
				    <td>7</td>
                <td><img src="img/11.png">埃弗顿</td>
                <td>8</td>
                <td>13</td>
                <td>3</td>
                <td>4</td>
                <td>1</td>
                <td>12</td>
                <td>8</td>
                <td>4</td>
				</tr>
				<tr>
				        <td>8</td>
                <td><img src="img/6.png" >热刺</td>
                <td>8</td>
                <td>13</td>
                <td>3</td>
                <td>4</td>
                <td>1</td>
                <td>11</td>
                <td>7</td>
                <td>4</td>
				</tr>
				<tr>
				    <td>9</td>
                <td><img src="img/20.png">南安普敦</td>
                <td>8</td>
                <td>12</td>
                <td>3</td>
                <td>3</td>
                <td>2</td>
                <td>13</td>
                <td>10</td>
                <td>3</td>
				</tr>
				<tr>
				    <td>10</td>
                <td><img src="img/14.png">利物浦</a></td>
                <td>8</td>
                <td>12</td>
                <td>3</td>
                <td>3</td>
                <td>2</td>
                <td>8</td>
                <td>10</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>11</td>
                <td><img src="img/80.png">斯旺西</a></td>
                <td>8</td>
                <td>10</td>
                <td>2</td>
                <td>4</td>
                <td>2</td>
                <td>10</td>
                <td>10</td>
                <td>0</td>

				</tr>
				<tr>
				    <td>12</td>
                <td><img src="img/57.png">沃特福德</a></td>
                <td>8</td>
                <td>10</td>
                <td>2</td>
                <td>4</td>
                <td>2</td>
                <td>6</td>
                <td>7</td>
                <td>-1</td>
				</tr>
				<tr>
				     <td>13</td>
                <td><img src="img/45.png">诺维奇</a></td>
                <td>8</td>
                <td>9</td>
                <td>2</td>
                <td>3</td>
                <td>3</td>
                <td>12</td>
                <td>14</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>14</td>
                <td><img src="img/110.png">斯托克城</td>
                <td>8</td>
                <td>9</td>
                <td>2</td>
                <td>3</td>
                <td>3</td>
                <td>8</td>
                <td>10</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>15</td>
                <td><img src="img/91.png">伯恩茅斯</td>
                <td>8</td>
                <td class="bg-eee">8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>10</td>
                <td>12</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>16</td>
                <td><img src="img/8.png">切尔西</a></td>
                <td>8</td>
                <td>8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>12</td>
                <td>17</td>
                <td>-5</td>
				</tr>
				<tr>
				    <td>17</td>
                <td><img src="img/35.png">西布朗</a></td>
                <td>8</td>
                <td>8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>6</td>
                <td>11</td>
                <td>-5</td>
				</tr>
				<tr>
				    <td>18</td>
                <td><img src="img/7.png">阿斯顿维拉</a></td>
                <td>8</td>
                <td>4</td>
                <td>1</td>
                <td>1</td>
                <td>6</td>
                <td>8</td>
                <td>13</td>
                <td>-5</td>
				</tr>
				<tr>
				     <td>19</td>
                <td><img src="img/56.png">桑德兰</a></td>
                <td>8</td>
                <td>3</td>
                <td>0</td>
                <td>3</td>
                <td>5</td>
                <td>8</td>
                <td>18</td>
                <td>-10</td>
				</tr>
				<tr>
				    <td>20</td>
                <td><img src="img/4.png">纽卡斯尔</a></td>
                <td>8</td>
                <td>3</td>
                <td>0</td>
                <td>3</td>
                <td>5</td>
                <td>6</td>
                <td>17</td>
                <td>-11</td>
				</tr>

					
			</table>
		</div>	
   </div>
   <!-- 中超积分结束 -->
   <!-- 欧冠赛程开始 -->
   <div class="tab-pane fade" id="ouguan_saicheng">

			<div class="data-table">
					<div id="#">
		   <div class="schedule-nav udv-clearfix">
        <div class="sn-title">
         <table>
            <tbody><tr>
                <td>轮次</td>
            </tr>
        </tbody></table>
    </div>
    <div class="sn-list">
        <ul class="udv-clearfix">
            
            <li >1</li>
            
            <li>2</li>
            
            <li>3</li>
            
            <li>4</li>
            
            <li>5</li>
            
            <li>6</li>
            
            <li>7</li>
            
            <li class="current">8</li>
            
            <li>9</li>
            
            <li>10</li>
            
            <li>11</li>
            
            <li>12</li>
            
            <li>13</li>
            
            <li>14</li>
            
            <li>15</li>
            
            <li>16</li>
            
            <li>17</li>
            
            <li>18</li>
            
            <li>19</li>
            
            <li>20</li>
            
            <li>21</li>
            
            <li>22</li>
            
            <li>23</li>
            
            <li>24</li>
            
            <li>25</li>
            
            <li>26</li>
            
            <li>27</li>
            
            <li>28</li>
            
            <li>29</li>
            
            <li>30</li>
            
            <li>31</li>
            
            <li>32</li>
            
            <li>33</li>
            
            <li>34</li>
            
            <li>35</li>
            
            <li>36</li>
            
            <li>37</li>
            
            <li>38</li>
            
        </ul>
    </div>
</div>
</div>
		<div id="#"><div class="schedule-round">
    <div class="current"><span>第8轮</span><i></i></div>
    <div class="sr-ctr">
        <div class="sr-ctr-in udv-clearfix">
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 19:45</p>
                    <p class="team_2" style="text-align:right;"><img src="img/31.png">&nbsp;水晶宫<span>2</span></p>
                   <p class="team_2"><img src="img/35.png">&nbsp;西布朗<span>0</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                   
                </div> 
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/7.png">&nbsp;阿斯顿维拉<span>0</span></p>
                    <p class="team_2"><img src="img/110.png">&nbsp;斯托克城<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/91.png">&nbsp;伯恩茅斯</a><span>1</span></p>
                    <p class="team_2"><img src="img/57.png">&nbsp;沃特福德</a><span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/43.png">&nbsp;曼城<span>6</span></p>
                    <p class="team_2"><img src="img/4.png">&nbsp;纽卡斯尔<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/45.png">&nbsp;诺维奇<span>1</span></p>
                    <p class="team_2"><img src="img/13.png">&nbsp;莱斯特<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-03 周六 22:00</p>
                    <p class="team_2"><img src="img/56.png">&nbsp;桑德兰<span>2</span></p>
                    <p class="team_2"><img src="img/21.png">&nbsp;西汉姆联<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 00:30</p>
                    <p class="team_2"><img src="img/8.png">&nbsp;切尔西<span>1</span></p>
                    <p class="team_2"><img src="img/20.png">&nbsp;南安普敦<span>3</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 20:30</p>
                    <p class="team_2"><img src="img/11.png">&nbsp;埃弗顿<span>1</span></p>
                    <p class="team_2"><img src="img/14.png">&nbsp;利物浦<span>1</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 23:00</p>
                    <p class="team_2"><img src="img/3.png">&nbsp;阿森纳<span>3</span></p>
                    <p class="team_2"><img src="img/1.png">&nbsp;曼联<span>0</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
            <div class="sr-box">
                <div class="up">
                    <p class="time_2">2015-10-04 周日 23:00</p>
                    <p class="team_2"><img src="img/80.png">&nbsp;斯旺西<span>2</span></p>
                    <p class="team_2"><img src="img/6.png">&nbsp;热刺<span>2</span></p>
                </div>
                <div class="down">
                    <p>
                        <span>战报</span>
                        <a href="#" target="_blank">高清图集</a>
                        <a href="#" target="_blank">视频集锦</a>
                    </p>
                </div>
            </div>
        
        </div>
    </div>
</div>
</div>
		</div>	
	    
   </div>
<!-- 欧冠赛程结束 -->
<!-- 欧冠积分开始 -->

   <div class="tab-pane fade" id="ouguan_jifen">
   <div class="title">
   <h3>积分榜</h3>
      <form action="">
				
				<select name="" id="">
					<option value="1">2015/16赛季</option>
					<option value="2">2014/15赛季</option>
					<option value="3">2013/14赛季</option>
					<option value="4">2012/13赛季</option>
				</select>
				
				<button class="btn-data" type="submit">搜索</button>
			</form>
    </div>
			<div class="data-table">
			<table> 				
				<tr class="tr1">
				    <td class="t1">排名</td>
					<td class="t2">球队</td>
					<td class="t-next">场次</td>
					<td class="t-next">积分</td>
					<td class="t-next">胜</td>
					<td class="t-next">平</td>
				    <td class="t-next">负</td>
					<td class="t-next">进球</td>
					<td class="t-next">失球</td>
					<td class="t-next">净胜球</td>
				</tr>
				
				<tr>
				    <td><span>1</span></td>
					<td><img src="img/43.png">曼城</td>
					<td>8</td>
					<td>18</td>
					<td>6</td>
					<td>0</td>
				    <td>2</td>
					<td>19</td>
					<td>7</td>
					<td>12</td>
				</tr>
				<tr>
				    <td><p class="p1">2</p></td>
					<td><img src="img/3.png">阿森纳</td>
					<td>8</td>
					<td>16</td>
					<td>5</td>
					<td>1</td>
				    <td>2</td>
					<td>13</td>
					<td>7</td>
					<td>6</td>
				</tr>
				<tr>
				     <td><p class="p2">3</p></td>
				     <td><img src="img/1.png">曼联</td>
				     <td>8</td>
				     <td>16</td>
				     <td>5</td>
				     <td>1</td>
				     <td>2</td>
				     <td>12</td>
				     <td>8</td>
				     <td>4</td>
				</tr>
				<tr>
				   <td>4</td>
                   <td><img src="img/31.png">水晶宫</td>
                <td>8</td>
                <td>15</td>
                <td>5</td>
                <td>0</td>
                <td>3</td>
                <td>11</td>
                <td>7</td>
                <td>4</td>
				</tr>
				<tr>
				    <td>5</td>
				    <td><img src="img/13.png" >莱斯特</td>
                <td>8</td>
                <td>15</td>
                <td>4</td>
                <td>3</td>
                <td>1</td>
                <td>17</td>
                <td>15</td>
                <td>2</td>
				</tr>
				<tr>
				    <td>6</td>
				    <td><img src="img/21.png" >西汉姆联</td>
                <td>8</td>
                <td>14</td>
                <td>4</td>
                <td>2</td>
                <td>2</td>
                <td>17</td>
                <td>11</td>
                <td>6</td>

				</tr>
				<tr>
				    <td>7</td>
                <td><img src="img/11.png">埃弗顿</td>
                <td>8</td>
                <td>13</td>
                <td>3</td>
                <td>4</td>
                <td>1</td>
                <td>12</td>
                <td>8</td>
                <td>4</td>
				</tr>
				<tr>
				        <td>8</td>
                <td><img src="img/6.png" >热刺</td>
                <td>8</td>
                <td>13</td>
                <td>3</td>
                <td>4</td>
                <td>1</td>
                <td>11</td>
                <td>7</td>
                <td>4</td>
				</tr>
				<tr>
				    <td>9</td>
                <td><img src="img/20.png">南安普敦</td>
                <td>8</td>
                <td>12</td>
                <td>3</td>
                <td>3</td>
                <td>2</td>
                <td>13</td>
                <td>10</td>
                <td>3</td>
				</tr>
				<tr>
				    <td>10</td>
                <td><img src="img/14.png">利物浦</a></td>
                <td>8</td>
                <td>12</td>
                <td>3</td>
                <td>3</td>
                <td>2</td>
                <td>8</td>
                <td>10</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>11</td>
                <td><img src="img/80.png">斯旺西</a></td>
                <td>8</td>
                <td>10</td>
                <td>2</td>
                <td>4</td>
                <td>2</td>
                <td>10</td>
                <td>10</td>
                <td>0</td>

				</tr>
				<tr>
				    <td>12</td>
                <td><img src="img/57.png">沃特福德</a></td>
                <td>8</td>
                <td>10</td>
                <td>2</td>
                <td>4</td>
                <td>2</td>
                <td>6</td>
                <td>7</td>
                <td>-1</td>
				</tr>
				<tr>
				     <td>13</td>
                <td><img src="img/45.png">诺维奇</a></td>
                <td>8</td>
                <td>9</td>
                <td>2</td>
                <td>3</td>
                <td>3</td>
                <td>12</td>
                <td>14</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>14</td>
                <td><img src="img/110.png">斯托克城</td>
                <td>8</td>
                <td>9</td>
                <td>2</td>
                <td>3</td>
                <td>3</td>
                <td>8</td>
                <td>10</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>15</td>
                <td><img src="img/91.png">伯恩茅斯</td>
                <td>8</td>
                <td class="bg-eee">8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>10</td>
                <td>12</td>
                <td>-2</td>
				</tr>
				<tr>
				    <td>16</td>
                <td><img src="img/8.png">切尔西</a></td>
                <td>8</td>
                <td>8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>12</td>
                <td>17</td>
                <td>-5</td>
				</tr>
				<tr>
				    <td>17</td>
                <td><img src="img/35.png">西布朗</a></td>
                <td>8</td>
                <td>8</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
                <td>6</td>
                <td>11</td>
                <td>-5</td>
				</tr>
				<tr>
				    <td>18</td>
                <td><img src="img/7.png">阿斯顿维拉</a></td>
                <td>8</td>
                <td>4</td>
                <td>1</td>
                <td>1</td>
                <td>6</td>
                <td>8</td>
                <td>13</td>
                <td>-5</td>
				</tr>
				<tr>
				     <td>19</td>
                <td><img src="img/56.png">桑德兰</a></td>
                <td>8</td>
                <td>3</td>
                <td>0</td>
                <td>3</td>
                <td>5</td>
                <td>8</td>
                <td>18</td>
                <td>-10</td>
				</tr>
				<tr>
				    <td>20</td>
                <td><img src="img/4.png">纽卡斯尔</a></td>
                <td>8</td>
                <td>3</td>
                <td>0</td>
                <td>3</td>
                <td>5</td>
                <td>6</td>
                <td>17</td>
                <td>-11</td>
				</tr>

					
			</table>
		</div>	
   </div>	
   <!-- 欧冠积分结束 -->
	</div>	
		</div>
	<!-- news end -->

@endsection
