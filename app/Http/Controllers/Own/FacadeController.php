<?php

namespace App\Http\Controllers\Own;

use CustomTool;
use App;
use DB;
use App\Http\Controllers\Controller;
class FacadeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    
    public function moni(){     
        
        $arr=array('3','8','6','4','2','9','5','1','a','f','n','c','t','k','q','d','v');
        $num = count($arr)-1;
        for($k = 0;$k<19999;$k++){
            $str = '';
            $email = '';
            for($i=0;$i<4;$i++){
                $key = rand(0,$num);
                $str .= $arr[$key];
                $e_key = rand(0,$num);
                $email .= $arr[$e_key];
            }
            DB::insert('insert into million (name,email) values ( "'.$str.'","'.$email.'")');
        }
        
        
        
        
    }

    public function king(){     
        echo '<pre>';
        $arr=array(3,8,6,4,2,9,5,1);
        $arr = $this->quick_sort($arr);
        dd($arr);
    }

    public function xrange($start = 1, $limit=6, $step = 1) {
        for ($i = $start; $i <= $limit; $i += $step) {
                yield $i;
            }   
    }


    //猴子选大王代码
    public function monkey($n ,$m){
        $arr = range(1,$n);     //构造数组  array(1,2,3,4,5,6,7,8);
        $i = 0;                 //设置数组指针
       print_r($arr);
        while(count($arr)>1){
            //遍历数组，判断当前猴子是否为出局序号，如果是则出局，否则放到数组最后
            if(($i+1) % $m ==0) {echo $i;
                unset($arr[$i]);
                
            } else {
                
                //array_push() 函数向第一个参数的数组尾部添加一个或多个元素（入栈），然后返回新数组的长度。
                array_push($arr ,$arr[$i]); //本轮非出局猴子放数组尾部
                
                unset($arr[$i]);   //删除

                print_r(array_values($arr));exit;
            }
            $i++;
        }
        return $arr;
    }

    //冒泡排序（数组排序）
    public function bubble_sort($array){
        $count = count($array);
        if ($count <= 0) return false;
        for($i=0; $i<$count; $i++){
            for($j=$count-1; $j>$i; $j–){
                if ($array[$j] <$array[$j-1]){
                    $tmp = $array[$j];
                    $array[$j] = $array[$j-1];
                    $array[$j-1] = $tmp;
                }
            }
        }
        dd($array);exit;
        return $array;
    }
    //快速排序
    public function quick_sort($arr)  
    {  
        //判断参数是否是一个数组
        if(!is_array($arr)) return false;
        //递归出口:数组长度为1，直接返回数组
        $length=count($arr);
        if($length<=1) return $arr;
        //数组元素有多个,则定义两个空数组
        $left=$right=array();
        //使用for循环进行遍历，把第一个元素当做比较的对象
        for($i=1;$i<$length;$i++)
        {
            //判断当前元素的大小
            if($arr[$i]<$arr[0]){
                $left[]=$arr[$i];
            }else{
                $right[]=$arr[$i];
            }
        }
        //递归调用
        $left=$this->quick_sort($left);
        $right=$this->quick_sort($right);
        //将所有的结果合并
        return array_merge($left,array($arr[0]),$right);
    }  
}
