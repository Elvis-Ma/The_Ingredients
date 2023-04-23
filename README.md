# The_Ingredients
## 摘要
2019年第74屆聯合國大會上提出了將每年9月29日訂為「國際食材損失與浪費問題宣傳日」，因為每年有3分之1的食材、約13億噸的食材被白白浪費掉，而食材遭到損耗的原因，有超過50%是源自於不合胃口、擺到過期；因此本小組規劃一個可以減少食物浪費的系統，協助使用者在每次購物後清楚地記錄購買的食材，在食物過期前主動通知使用者，再依據使用者的行為特性，利用基於內容的推薦演算法(Content-based- filtering)，推薦最適合使用者冰箱現有食材的食譜，讓使用者可以在食材過期前，將食材轉變為可口的料理；相信透過提醒食材的到期日，並搭配客製化推薦滿足消費者喜歡的食譜，可以提高使用者對食物的料理興趣，以達到減少食材遭到浪費的情況。

開放資料資料集:

1. 政府資料開放平台
* 水產精品資料: https://data.gov.tw/dataset/6034
* 農漁會年度百大農業精品好禮: https://data.gov.tw/dataset/24657
* 南投縣農特商家介紹(水果館): https://data.gov.tw/dataset/95028
* 南投縣十大熱銷農產品: https://data.gov.tw/dataset/95030
* 南投縣農特產品介紹(水果館): https://data.gov.tw/dataset/95038
* 南投縣農特商家介紹(根莖蔬菜館): https://data.gov.tw/dataset/95042

2. 台北市政府資料平台
* 臺北市各類農產品批發市場歷史交易量、交易額、平均價表一覽: https://data.taipei/#/dataset/detail?id=e8d4f1bb-164a-4f6d-9c21-f2754656d4e4

關鍵字：智慧冰箱、糧食危機、條碼辨識、個人化提醒、演算法推薦

## 創意描述

1. 食譜推薦
* 客製化食譜推薦，降低使用者不知道能烹煮什麼料理的困擾
  * 使用者需要烹煮料理時，不知道能煮什麼一直都是困擾著大部分人的問題，所以本系統利用基於內容的推薦演算法，依據使用者的行為特性及我們自行收集的食譜庫，在使用者需要食譜的時候，給予最佳的推薦。

* 使用者採購推薦，減少規劃採買食材的所需時間
  * 不知道可以採買哪些食材來製作料理是使用者常見的困擾，本系統針對使用者缺少的食材進行推薦，以省去規劃採買清單的時間，也能避免購買多餘的食材。

2. 提供使用者一個整合平台，滿足使用者需求
    * 家人的飲食喜好都不相同，為避免在飲食上有溝通不清楚的部分，透過本系統許願池的功能，讓使用者可以將想要吃的料理，或想購買食材記錄在許願池中，讓家中負責採購的成員得知。

3. 利用手機掃描建檔，排除需另外購買設備的費用
    * 市面上少數具智慧功能的冰箱，具備掃描鏡頭的功能，但因掃描鏡頭與冰箱是一體成形的，故使用者必須購買一整台冰箱才能享有管理食材的功能；故本系統採手機掃描建檔將物品資訊新增至本系統中冰箱內容物功能內，既方便又省去購買設備的費用。

4. 食品保存期限將至，系統主動提醒使用者食材即將過期通知
    * 冰箱中時常有食材擺放到過期的狀況發生，為了避免類似的情形，本系統在食材到期前主動發出即將過期通知，並在冰箱內容物功能中顯示即將過期的警示，以讓使用者得知冰箱中有哪些食材是即將過期的。

5. 整合民間食譜網站的料理資訊，提升食譜多樣性
    * 本小組取得民間食譜網站的授權，將食譜相關資訊彙整至食譜資料庫，提供豐富且簡單的料理給使用者參考。

6. 整政府資料開放平台的農業精品，提供使用者更好的食材選擇
    * 本小組透過彙整得獎之農業精品，讓使用者在缺少食材時，能優先選擇優良的在地食材。

## 系統功能簡介

1. APP功能

| 功能 | 功能簡介 |
| --- | --- |
| 會員維護 | 新增、編輯帳號。 |
| 飲食偏好設定 | 提供使用者登記自己不喜歡的食材或吃葷吃素。 |
| 採購清單維護 | 新增、編輯、刪除採購清單上的品項與數量。 |
| 冰箱維護 | 新增、編輯、退出冰箱。 |
| 新增冰箱成員 | 將其他使用者加入到自己的冰箱群組。 |
| 必備食材 | 當冰箱內沒有使用者設定的食材時，系統主動將食材加到採購清單中。 |
| 許願池 | 提供冰箱內使用者群組，一個留言板的功能，方便使用者記錄想購買的食材。 |
| ★食譜推薦 | 透過本系統獨創的食譜喜好分析模組，分析個別使用者的喜好，<br>並結合現行食譜資料庫的內容，推薦符合使用者個人喜好的料理。 |
| ★採購推薦 | 在選擇購買食材時，透過本系統獨創的採購分析模組，針對使用者的喜好特性，<br>比對冰箱內現有食材並整理出冰箱缺少的食材，方便使用者進行採買。 |
| 食譜搜尋 | 查看食譜。 |
| 食譜維護 | 新增、編輯、刪除食譜。 |
| 收藏食譜 | 收藏喜歡的食譜。 |
| 現有食材 | 查看冰箱內擁有的食材。 |
| 食材維護 | 新增、編輯、刪除冰箱內的食材。 |
| 即期品提醒 | 食材到期前會發出提醒。 |

2. 後台分析模組

| 功能 | 功能簡介 |
| --- | --- |
| ★食譜喜好分析 | 依據基於內容的推薦演算法，分析使用者當下能烹煮的推薦食譜(例如圖一所示)。 |
| ★採購分析 | 依據基於內容的推薦演算法，分析推薦食譜缺少的食材，避免購買多餘的食材。 |
