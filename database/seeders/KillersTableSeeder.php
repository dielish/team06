<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KillersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('killers')->insert([
            'killer'=>'陷阱殺手',
            'Did'=> 1,
            'difficulty'=>'簡單',
            'strenght1'=>'捕獸夾',
            'strenght2'=>'',
            'inherited1'=>'恐慌降臨',
            'inherited2'=>'所向無敵',
            'inherited3'=>'暗夜之睛',
            'anothername'=>'夾子',

        ]);
        DB::table('killers')->insert([
            'killer'=>'電鋸殺手',
            'Did'=> 1,
            'difficulty'=>'簡單',
            'strenght1'=>'電鋸衝刺',
            'strenght2'=>'',
            'inherited1'=>'耐力持久',
            'inherited2'=>'光明之眼',
            'inherited3'=>'工匠',
            'anothername'=>'電鋸',

        ]);

        DB::table('killers')->insert([
            'killer'=>'幽靈殺手',
            'Did'=> 1,
            'difficulty'=>'簡單',
            'strenght1'=>'骷髏喪鐘',
            'strenght2'=>'',
            'inherited1'=>'恐慌降臨',
            'inherited2'=>'所向無敵',
            'inherited3'=>'欣喜若狂',
            'anothername'=>'隱鬼',

        ]);
        DB::table('killers')->insert([
            'killer'=>'護士',
            'Did'=> 1,
            'difficulty'=>'困難',
            'strenght1'=>'史賓賽的最後一口氣',
            'strenght2'=>'',
            'inherited1'=>'冥喘',
            'inherited2'=>'死亡恐懼',
            'inherited3'=>'護士的呼喚',
            'anothername'=>'',

        ]);
        DB::table('killers')->insert([
            'killer'=>'女獵手',
            'Did'=> 1,
            'difficulty'=>'普通',
            'strenght1'=>'狩獵飛斧',
            'strenght2'=>'',
            'inherited1'=>'噬血凶獸',
            'inherited2'=>'領地意識',
            'inherited3'=>'厄咒  獵手搖籃曲',
            'anothername'=>'',

        ]);
        DB::table('killers')->insert([
            'killer'=>'麥克爾 邁爾斯',
            'Did'=> 2,
            'difficulty'=>'困難',
            'strenght1'=>'邪念覺醒',
            'strenght2'=>'',
            'inherited1'=>'把最好的留在最後',
            'inherited2'=>'不要玩食物',
            'inherited3'=>'湮滅之光',
            'anothername'=>'麥麥',

        ]);
        DB::table('killers')->insert([
            'killer'=>'妖巫',
            'Did'=> 3,
            'difficulty'=>'普通',
            'strenght1'=>'鬼靈陷阱',
            'strenght2'=>'',
            'inherited1'=>'厄咒  第三封印',
            'inherited2'=>'厄咒  毀滅',
            'inherited3'=>'厄咒   吞噬希望',
            'anothername'=>'妖婆',

        ]);
        DB::table('killers')->insert([
            'killer'=>'醫生',
            'Did'=> 4,
            'difficulty'=>'困難',
            'strenght1'=>'電擊治療',
            'strenght2'=>'靜電爆破',
            'inherited1'=>'壓倒性的存在',
            'inherited2'=>'監控與虐待',
            'inherited3'=>'電壓超載',
            'anothername'=>'',

        ]);
        DB::table('killers')->insert([
            'killer'=>'食人魔',
            'Did'=> 23,
            'difficulty'=>'簡單',
            'strenght1'=>'布巴的電鋸',
            'strenght2'=>'',
            'inherited1'=>'擊倒出局',
            'inherited2'=>'人肉燒烤',
            'inherited3'=>'富蘭克林之死',
            'anothername'=>'皮臉',

        ]);
        DB::table('killers')->insert([
            'killer'=>'夢魘',
            'Did'=> '5',
            'difficulty'=>'困難',
            'strenght1'=>'睡夢束縛',
            'strenght2'=>'睡夢投影',
            'inherited1'=>'怒火中燒',
            'inherited2'=>'記憶猶新',
            'inherited3'=>'血腥獄長',
            'anothername'=>'老佛',

        ]);
        DB::table('killers')->insert([
            'killer'=>'門徒',
            'Did'=> '6',
            'difficulty'=>'普通',
            'strenght1'=>'拼圖殺人魔的洗禮',
            'strenght2'=>'蹲下(伏擊)',
            'inherited1'=>'行刑者的技巧',
            'inherited2'=>'瞭如指掌',
            'inherited3'=>'做出你的選擇',
            'anothername'=>'小豬',

        ]);
        DB::table('killers')->insert([
            'killer'=>'小丑',
            'Did'=> '18',
            'difficulty'=>'普通',
            'strenght1'=>'精煉毒酒',
            'strenght2'=>'精煉解毒劑',
            'inherited1'=>'花言巧語',
            'inherited2'=>'小丑恐懼症',
            'inherited3'=>'心驚肉跳',
            'anothername'=>'',

        ]);
        DB::table('killers')->insert([
            'killer'=>'怨靈',
            'Did'=> '19',
            'difficulty'=>'困難',
            'strenght1'=>'山岡家族的作祟',
            'strenght2'=>'',
            'inherited1'=>'暴怒怨靈',
            'inherited2'=>'厄咒  鬧鬼之地',
            'inherited3'=>'怨氣沖天',
            'anothername'=>'',
        ]);
        DB::table('killers')->insert([
            'killer'=>'軍團',
            'Did'=> '20',
            'difficulty'=>'普通',
            'strenght1'=>'野性狂暴',
            'strenght2'=>'',
            'inherited1'=>'衝突',
            'inherited2'=>'瘋狂勇氣',
            'inherited3'=>'鐵處女',
            'anothername'=>'',
        ]);
        DB::table('killers')->insert([
            'killer'=>'鬼臉',
            'Did'=> '22',
            'difficulty'=>'困難',
            'strenght1'=>'暗夜裹屍布',
            'strenght2'=>'蹲下',
            'inherited1'=>'洗耳恭聽',
            'inherited2'=>'驚悚顫慄',
            'inherited3'=>'鬼祟追逐',
            'anothername'=>'',
        ]);
        DB::table('killers')->insert([
            'killer'=>'魔神',
            'Did'=> '7',
            'difficulty'=>'普通',
            'strenght1'=>'撕裂',
            'strenght2'=>'來自深淵',
            'inherited1'=>'心神破碎',
            'inherited2'=>'殘酷限制',
            'inherited3'=>'電湧',
            'anothername'=>'',
        ]);
        DB::table('killers')->insert([
            'killer'=>'鬼武者',
            'Did'=> '8',
            'difficulty'=>'困難',
            'strenght1'=>'山岡之怒',
            'strenght2'=>'惡魔衝刺 / 之擊',
            'inherited1'=>'殘心策略',
            'inherited2'=>'鮮血回音',
            'inherited3'=>'宿敵',
            'anothername'=>'ONI',
        ]);
        DB::table('killers')->insert([
            'killer'=>'死亡槍手',
            'Did'=> '9',
            'difficulty'=>'普通',
            'strenght1'=>'救贖者',
            'strenght2'=>'',
            'inherited1'=>'機械愛好者',
            'inherited2'=>'死亡開關',
            'inherited3'=>'厄咒  懲罰',
            'anothername'=>'槍爹',
        ]);
        DB::table('killers')->insert([
            'killer'=>'劊子手',
            'Did'=> '10',
            'difficulty'=>'普通',
            'strenght1'=>'罪惡懲罰',
            'strenght2'=>'贖罪牢籠',
            'inherited1'=>'強制懺悔',
            'inherited2'=>'折磨之路',
            'inherited3'=>'死亡枷鎖',
            'anothername'=>'三角頭',
        ]);
        DB::table('killers')->insert([
            'killer'=>'枯魔',
            'Did'=> '11',
            'difficulty'=>'困難',
            'strenght1'=>'枯萎腐化',
            'strenght2'=>'',
            'inherited1'=>'龍爪',
            'inherited2'=>'厄咒  鮮血之禮',
            'inherited3'=>'厄咒  不死',
            'anothername'=>'',
        ]);
        DB::table('killers')->insert([
            'killer'=>'騙術師',
            'Did'=> '12',
            'difficulty'=>'簡單',
            'strenght1'=>'精彩表演',
            'strenght2'=>'主要表演',
            'inherited1'=>'追星',
            'inherited2'=>'厄咒  群眾控制',
            'inherited3'=>'無路可逃',
            'anothername'=>'',
        ]);
        DB::table('killers')->insert([
            'killer'=>'復仇邪神',
            'Did'=> '13',
            'difficulty'=>'普通',
            'strenght1'=>'T病毒',
            'strenght2'=>'僵屍',
            'inherited1'=>'致命追逐者',
            'inherited2'=>'歇斯底里',
            'inherited3'=>'爆發',
            'anothername'=>'暴君',
        ]);
        DB::table('killers')->insert([
            'killer'=>'地獄修士',
            'Did'=> '21',
            'difficulty'=>'困難',
            'strenght1'=>'痛苦召喚',
            'strenght2'=>'哀痛之盒',
            'inherited1'=>'死鎖',
            'inherited2'=>'厄咒  玩物',
            'inherited3'=>'禍害之鉤  苦痛之贈',
            'anothername'=>'釘子頭',
        ]);

        DB::table('killers')->insert([
            'killer'=>'雙胞胎',
            'Did'=> '15',
            'difficulty'=>'困難',
            'strenght1'=>'血脈牽絆',
            'strenght2'=>'',
            'inherited1'=>'囤積者',
            'inherited2'=>'壓制',
            'inherited3'=>'致命一擊',
            'anothername'=>'',
        ]);
        DB::table('killers')->insert([
            'killer'=>'瘟疫',
            'Did'=> '17',
            'difficulty'=>'普通',
            'strenght1'=>'骯髒傾瀉',
            'strenght2'=>'',
            'inherited1'=>'腐爛干預',
            'inherited2'=>'恐懼傳染',
            'inherited3'=>'黑暗奉獻',
            'anothername'=>'',
        ]);

    }

}
