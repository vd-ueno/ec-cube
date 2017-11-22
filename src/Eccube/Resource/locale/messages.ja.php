<?php
return [
    'Login email' => 'メールアドレス',
    'Login pass' => 'パスワード',
    'Login memory' => '次回から自動的にログインする',
    'Bad credentials.' => 'ログインできませんでした。<br>入力内容に誤りがないかご確認ください。',
    'Invalid CSRF token.' => 'もう一度ログイン処理をしてください。',
    'Your session has timed out, or you have disabled cookies.' => 'もう一度ログイン処理をしてください。',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'ファイルサイズが大きすぎます。',
    'Name' => 'お名前',
    'Name01' => '姓',
    'Name02' => '名',
    'Kana' => 'お名前(フリガナ)',
    'Kana01' => 'セイ',
    'Kana02' => 'メイ',
    'Zip' => '郵便番号',
    'Address' => '住所',
    'Tel' => '電話番号',
    'Fax' => 'FAX番号',
    'Email' => 'メールアドレス',
    'Password' => 'パスワード',
    'Job' => '職業',
    'Sex' => '性別',
    'Birth' => '生年月日',
    'Company name' => '会社名',
    'Contents' => 'お問い合わせ内容',
    'Tag' => 'タグ',
    'form.empty_value' => '選択してください',
    'form.pref.empty_value' => '都道府県を選択',
    'form.job.empty_value' => '選択してください',
    'form.contact.address.help' => '住所は2つに分けてご記入ください。マンション名は必ず記入してください。',
    'form.contact.contents.help' => 'ご注文に関するお問い合わせには、必ず「ご注文番号」をご記入くださいますようお願いいたします。',
    'form.member.email.invalid' => '同じメールアドレスを入力してください。',
    'form.member.password.invalid' => '同じパスワードを入力してください。',
    'form.type.numeric.invalid' => '数字で入力してください。',
    'form.type.float.invalid' => '数字と小数点のみ入力できます。',
    'form.member.repeated.confirm' => '確認のためもう一度入力してください',
    'form.type.graph.invalid' => '半角英数字で入力してください。',
    'form.type.name.firstname.nothasspace' => 'お名前(名)にスペース、タブ、改行は含めないで下さい。',
    'form.type.name.lastname.nothasspace' => 'お名前(性)にスペース、タブ、改行は含めないで下さい。',
    'form.type.customer.company.nothasspace' => '会社名にスペース、タブ、改行は含めないで下さい。',
    'form.type.admin.nottelstyle' => '電話番号は半角数字かハイフンのみを入力してください。。',
    'form.type.admin.notkanastyle' => 'お名前(フリガナ)はカタカナで入力してください。',
    'form.type.select.notselect' => '入力されていません。',
    'form.type.select.selectisfuturedate' => '未来の日付は選択出来ません。',
    'cart.over.stock' => '選択された商品(%product%)の在庫が不足しております。
一度に在庫数を超える購入はできません。',
    'cart.over.sale_limit' => '選択された商品(%product%)は販売制限しております。
一度に販売制限数を超える購入はできません。',
    'cart.zero.stock' => '選択された商品(%product%)の在庫が不足しております。
該当商品をカートから削除しました。',
    'cart.over.price_limit' => '商品を購入できる金額の上限を超えております。数量を調整してください。',
    'cart.product.type.kind' => 'この商品は同時に購入することはできません。',
    'cart.product.payment.kind' => 'お支払方法が異なるためこの商品は同時に購入することはできません。',
    'cart.product.delete' => '現時点で販売していない商品が含まれておりました。該当商品をカートから削除しました。',
    'cart.product.not.status' => '現時点で購入できない商品が含まれておりました。該当商品をカートから削除しました。',
    'cart.product.not.producttype' => '「%product%」はまだ配送の準備ができておりません。
恐れ入りますがお問い合わせページよりお問い合わせください。',
    'shopping.multiple.delivery' => '配送方法が異なる商品が含まれているため、お届け先は複数となります。',
    'shopping.multiple.quantity.diff' => '数量の合計が、カゴの中の数量と異なっています。',
    'shopping.delivery.not.producttype' => '配送の準備ができていない商品が含まれております。
恐れ入りますがお問い合わせページよりお問い合わせください。',
    'shopping.total.price' => '合計金額が不正です。(¥ totalPrice)',
    'front.shopping.order.error' => '購入処理でエラーが発生しました。',
    'front.shopping.stock.error' => '選択された商品の在庫が不足しております。該当商品をカートから削除しました。',
    'front.shopping.system.error' => '購入処理でシステムエラーが発生しました。大変お手数ですが、サイト管理者までご連絡ください。',
    'admin.install.warning' => 'installphpPath は、インストール完了後にファイルを削除してください',
    'admin.register.complete' => '登録が完了しました。',
    'admin.register.failed' => '登録できませんでした。',
    'admin.delete.complete' => '削除が完了しました。',
    'admin.delete.failed' => '削除できませんでした。',
    'admin.delete.failed.foreign_key' => '関連するデータがあるため, %name%を削除できませんでした。',
    'admin.delete.warning' => '既に削除されています。',
    'admin.rank.move.complete' => 'ランクの移動が完了しました。',
    'admin.order.save.complete' => '受注情報を保存しました。',
    'admin.order.delete.complete' => '受注情報を削除しました。',
    'admin.order.delete.failed' => '受注情報を削除できませんでした。',
    'Quantity' => '数量',
    'admin.class_name.up.complete' => '規格を上へ移動しました。',
    'admin.class_name.up.error' => '規格を上へ移動できませんでした。',
    'admin.class_name.down.complete' => '規格を下へ移動しました。',
    'admin.class_name.down.error' => '規格を下へ移動できませんでした。',
    'admin.class_name.save.complete' => '規格を保存しました。',
    'admin.class_name.save.error' => '規格を保存できませんでした。',
    'admin.class_name.delete.complete' => '規格を削除しました。',
    'admin.class_name.delete.error' => '規格を削除できませんでした。',
    'admin.class_category.up.complete' => '分類を上へ移動しました。',
    'admin.class_category.up.error' => '分類を上へ移動できませんでした。',
    'admin.class_category.down.complete' => '分類を下へ移動しました。',
    'admin.class_category.down.error' => '分類を下へ移動できませんでした。',
    'admin.class_category.save.complete' => '分類を保存しました。',
    'admin.class_category.save.error' => '分類を保存できませんでした。',
    'admin.class_category.delete.complete' => '分類を削除しました。',
    'admin.class_category.delete.error' => '分類を削除できませんでした。',
    'admin.class_category.delete.hasproduct' => 'この分類は商品で使われているので削除できません。',
    'admin.category.up.complete' => 'カテゴリを上へ移動しました。',
    'admin.category.up.error' => 'カテゴリを上へ移動できませんでした。',
    'admin.category.down.complete' => 'カテゴリを下へ移動しました。',
    'admin.category.down.error' => 'カテゴリを下へ移動できませんでした。',
    'admin.category.save.complete' => 'カテゴリを保存しました。',
    'admin.category.save.error' => 'カテゴリを保存できませんでした。',
    'admin.category.delete.complete' => 'カテゴリを削除しました。',
    'admin.category.delete.error' => 'カテゴリを削除できませんでした。',
    'admin.product.search.stock' => '在庫なし',
    'admin.product.product_class.save.complete' => '商品規格を登録しました。',
    'admin.product.product_class.update.complete' => '商品規格を更新しました。',
    'admin.product.product_class.delete.complete' => '商品規格を削除しました。',
    'admin.product.copy.complete' => '商品を複製しました。',
    'admin.product.copy.failed' => '商品の複製に失敗しました。',
    'admin.product.csv_import.save.complete' => '商品登録CSVファイルをアップロードしました。',
    'admin.category.csv_import.save.complete' => 'カテゴリ登録CSVファイルをアップロードしました。',
    'admin.customer.save.complete' => '会員情報を保存しました。',
    'admin.customer.save.failed' => '会員情報を保存できませんでした。',
    'admin.customer.delete.complete' => '会員情報を削除しました。',
    'admin.customer.delete.failed' => '会員情報を削除できませんでした。',
    'admin.customer.resend.complete' => '仮会員登録メールを送信しました。',
    'admin.news.up.complete' => '新着情報を上へ移動しました。',
    'admin.news.up.error' => '新着情報を上へ移動できませんでした。',
    'admin.news.down.complete' => '新着情報を下へ移動しました。',
    'admin.news.down.error' => '新着情報を下へ移動できませんでした。',
    'admin.news.save.complete' => '新着情報を保存しました。',
    'admin.news.save.error' => '新着情報を保存できませんでした。',
    'admin.news.delete.complete' => '新着情報を削除しました。',
    'admin.news.delete.error' => '新着情報を削除できませんでした。',
    'admin.member.up.complete' => 'メンバーを上へ移動しました。',
    'admin.member.up.error' => 'メンバーを上へ移動できませんでした。',
    'admin.member.down.complete' => 'メンバーを下へ移動しました。',
    'admin.member.down.error' => 'メンバーを下へ移動できませんでした。',
    'admin.member.save.complete' => 'メンバーを保存しました。',
    'admin.member.save.error' => 'メンバーを保存できませんでした。',
    'admin.member.delete.complete' => 'メンバーを削除しました。',
    'admin.member.delete.error' => 'メンバーを削除できませんでした。',
    'admin.shop.save.complete' => '基本情報を保存しました。',
    'admin.shop.save.error' => '基本情報を保存できませんでした。',
    'admin.shop.download.invalid' => 'ダウンロード無制限でない場合、ダウンロード可能日数を入力してください。',
    'admin.shop.tax.save.complete' => '税率設定情報を保存しました。',
    'admin.shop.tax.delete.complete' => '税率設定情報を削除しました。',
    'admin.shop.mail.save.complete' => 'メールテンプレート情報を保存しました。',
    'admin.shop.mail.save.error' => 'メールテンプレートの新規登録はできません。',
    'admin.shop.csv.save.complete' => 'CSV出力を設定しました。',
    'admin.content.template.save.complete' => 'テンプレート設定を保存しました。',
    'admin.content.template.add.complete' => 'テンプレートファイルをアップロードしました。',
    'admin.content.template.delete.complete' => 'テンプレートを削除しました。',
    'admin.content.template.delete.default.error' => 'デフォルトテンプレートは削除できません。',
    'admin.content.template.delete.current.error' => '現在設定中のテンプレートは削除できません。',
    'admin.content.cache.save.complete' => 'キャッシュを削除しました。',
    'admin.system.security.save.complete' => 'セキュリティ設定を保存しました。',
    'admin.system.security.route.dir.complete' => '管理画面のURLを変更しましたので再ログインをしてください。',
    'admin.system.authority.save.complete' => '権限設定を保存しました。',
    'admin.plugin.enable.complete' => 'プラグインを有効にしました。',
    'admin.plugin.enable.depend' => '%name%を有効化するためには、先に%depend_name%を有効化してください。',
    'admin.plugin.disable.complete' => 'プラグインを無効にしました。',
    'admin.plugin.disable.depend' => '%name%を無効化するためには、先に%depend_name%を無効化してください。',
    'admin.plugin.already.enable' => 'すでに有効化されています。',
    'admin.plugin.already.disable' => 'すでに無効化されています。',
    'admin.plugin.uninstall.complete' => 'プラグインを削除しました。',
    'admin.plugin.uninstall.depend' => '%name%プラグインは、%depend_name%プラグインに依存しているため削除することができません。
先に%depend_name%プラグインを削除してください。',
    'admin.plugin.uninstall.error' => 'プラグインを削除できませんでした。',
    'admin.plugin.uninstall.error.not_disable' => 'プラグインを無効化してください。',
    'admin.plugin.update.complete' => '更新が完了しました。',
    'plugin already installed.' => 'プラグインは既にインストールされています。',
    'admin.plugin.not.found' => 'プラグインが見つかりません。',
    'admin.plugin.install.fail' => 'プラグインのインストールに失敗しました。',
    'admin.plugin.authentication.setting.complete' => '認証キーを設定しました。',
    'admin.plugin.install.complete' => 'プラグインをインストールしました。',
    'admin.plugin.download.pem.complete' => '証明書ファイルを設定しました。',
    'admin.plugin.download.pem.error' => '証明書ファイルの設定ができませんでした。',
    'admin.preview.register.complete' => 'プレビューを登録しました',
    'admin.change_password.save.complete' => 'パスワードを変更しました。',
    'admin.change_password.save.error' => 'パスワードを変更できませんでした。',
    'admin.payment.visible.complete' => '表示に設定しました。',
    'admin.payment.invisible.complete' => '非表示に設定しました。',
    'admin.payment.delete.error' => 'すでに使用されている支払方法は削除できません。',
    'admin.delivery.visible.complete' => '表示に変更しました。',
    'admin.delivery.hidden.complete' => '非表示に変更しました。',
    'admin_title' => 'EC-CUBE 管理機能',
    'normal_price_title' => '通常価格',
    'sale_price_title' => '販売価格',
    'form.address1.help' => '市区町村名 (例：千代田区神田神保町)',
    'form.address2.help' => '番地・ビル名 (例：1-3-5)',
    'This value should not be blank.' => '入力されていません。',
    'This value should be the user\'s current password.' => '現在のパスワードが正しくありません。',
    'Invalid twig format. {{ error }}' => 'Twigのフォーマットが正しくありません。{{ error }}',
];
