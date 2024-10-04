# データエンジニアカタパルト Phase01 課題

## 挑戦した課題

[✅] 初級

[] 上級

## 実装した内容
・いいね数の表示および、'いいね'を押した後のボタンを'いいね取り消し'に変更し、分かりやすくした。
・ツイートをいいね数および作成順で表示する、'話題のツイート'画面を作成した。

## デプロイ先の URL または画面収録したファイル名
Laravel - Google Chrome 2024-10-04 12-49-08.mp4
## 使い方

1. ツイートに対して'いいね'を押す。取り消したい場合は'いいね取り消し'を押す

2. 話題のツイート画面で、いいね数が多いツイートを確認できる


## 工夫した点
いいね数順にツイートを表示する際にwithCount('liked')を用い、中間テーブルのtweet_idごとにグループ化し並び替えを行った点。

## 苦戦した点
中間テーブルのtweet-idにもとづいて並び替えを行う際に、whereHasやcount()等を活用しようとしたが、エラーが解決できず苦戦した。withCountを用いて上手くいったが、上記の方法でも実装したい。また、'いいね'だけでなく、気いらない等の機能を追加したいと考え、新たにtweetとUserの多対多の関係を表す中間テーブルを作成した。しかい、命名規則に従わない多対多の連携に苦戦しており、現在も取り組んでいる段階。


## Phase01 終えての感想
ルーティングの設定等、実際に自分で取り組むとわからない部分が多く、課題提出後も根気強く向き合わないと身につかないと感じている。