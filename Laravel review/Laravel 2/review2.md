# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されているか
<input type="hidden" name="_method" value="PUT">

### findメソッドの引数に指定しているIDは何のIDか
DBのレコードのidカラムの値

### findメソッドで実行しているSQLは何か
SELECT * FROM 'テーブル名' WHERE id = $id;

### findメソッドで取得できる値は何か
引数で渡した条件に合致するレコード

### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか
新規登録の際はTodoインスタンスを呼び出してsave()を行っているのに対し、
更新処理は呼び出したレコードに対してsave()を行っている違いがある。

## Todo論理削除

### traitとclassの違いとは
1つのクラスに対し、classは1つのクラスしか継承できないが、traitは複数追加することができる。
classはインスタンス化できるのに対し、traitはインスタンス化できない。

### traitを使用するメリットとは
既存のクラスに対して、必要に応じて複数の機能を追加することができる。

## その他

### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか
web.phpのルート定義でTodoControllerが呼び出されたタイミング

### RequestクラスからFormRequestクラスに変更した理由
バリデーションを実装するため。
バリデーション実装を行うためにTodoRequestクラスを作成したが、
継承元のFormRequestはRequestクラスを継承しているので、Requestクラスの機能はそのまま使えつつバリデーション実装を行うことができる。

### $errorsのhasメソッドの引数・返り値は何か
引数：formの入力欄のname属性
返り値：真偽値

### $errorsのfirstメソッドの引数・返り値は何か
引数：formの入力欄のname属性
返り値：文字列

### フレームワークとは何か
開発を効率化するための枠組みのこと。
ファイルのディレクトリ構成が決まっていたり、さまざま機能が用意されている。

### MVCはどういったアーキテクチャか
機能を分割することで開発効率を高めるための構造のこと。
Model、View、Controllerに分割し役割を持たせることで、コードの再利用性や可読性を高めることができる。

### ORMとは何か、またLaravelが使用しているORMは何か
Object-Relational Mappingのこと。
言語のクラス（オブジェクト）とDBのテーブルをマッピング（紐付け）することで、SQL文を直接実行することなくDBとのやり取りができる。
LaravelではEloquent ORMを使用している。

### composer.json, composer.lockとは何か
composer.json：インストールするパッケージ一覧を表示するファイル
composer.lock：実際にインストールされたパッケージの、バージョンなどの具体的な情報が自動で記録されるファイル

### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか
src/vendor配下
