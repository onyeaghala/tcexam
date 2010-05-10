<?php
// CACHE FILE FOR LANGUAGE: bg
// DATE: 2010-05-10 15:10:03
// *** DELETE THIS FILE TO RELOAD DATA FROM TMX FILE ***

$tmx['a_meta_charset']='UTF-8';
$tmx['a_meta_dir']='ltr';
$tmx['a_meta_language']='bg';
$tmx['d_admin_index']='Това е административната част на <a href="tce_page_info.php" title="относно TCExam">TCExam</a>, е платформа и същевременно интуитивен софтуер за създаване, управление и провеждане на он-лайн тестове.<br /><br /> От менюто вляво можете да достъпите различните секции на системата:<ul><li><strong>потребители</strong><br />Тази секция съдържа формите за <a href="tce_edit_user.php" title="Управление на потребители">въвеждане и управление</a> на потребители, <a href="tce_select_users.php" title="Избор на потребители"> за да ги избереш</a> и покажеш списък на текущите <a href="tce_show_online_users.php" title="Онлайн потребители">он-лайн потребители</a>.<br />Само регистрираните потребители имат потребителско име и парола, които им осигуряват достъп до публичните зони на системата и правото за провеждане на тестове.<br />Възможно е да се дефинират различни нива на достъп, както за потребителите, така и за различните компоненти и части на системата (страници, форми, секции).<br />TCExam използва още една допълнителна система за сигурност за защита от неоторизиран достъп - основана на проверката на IP адреси.</li><li><strong>теми</strong><br />Тази секция съдържа формите за въвеждане и промяна на <a href="tce_edit_subject.php" title="Управление на теми">темите на теста</a>, свързаните с него <a href="tce_edit_question.php" title="Управление на въпроси">въпроси</a> и <a href="tce_edit_answer.php" title="Управление на отговори">отговори</a>.<br />Можете да изберете неограничен брой теми, които да се използват за даден тест, а също така можете за всяка тема да дефинирате неограничен брой въпроси и възможни отговори. Системата автоматично, на произволен принцип, ще избере въпросите, които са налични в момента.<br />TCExam поддържа два вида тестове - тези със свободен отговор и тези от тип А Б В.  Последните се оценяват чрез специфична форма <a href="tce_edit_rating.php" title="Оценяване на отговори"></a>,докато тестовете с отворен отговор ще бъдат автоматично оценявани.<br />Всички видове тестове, теми, въпроси и отговори притежават собсвтен код (tcecode), който чрез използването на специфична форма, позволява използването на снимки, графики и текстообработка.</li><li><strong>тест</strong><br />Тази секция включва начин на въвеждане, генериране и промяна на различните <a href="tce_edit_test.php" title="Управление на тестове">тестове</a>, начин за <a href="tce_edit_rating.php" title="Оценяване на отговори">оценяване</a> на свободните отговори и начините за представяне или генериране на PDF версии на <a href="tce_show_result_allusers.php" title="Обобщение на резултатите от тестовете">резултатите</a>, подробности за <a href="tce_show_result_user.php" title="Резултати на тестове направени от потребителите">тестовете направени от потребителите</a>, както и <a href="tce_show_result_questions.php" title="Статистики на въпросите">статистики</a> на използваните въпроси и отговори.<br />TCExam произволно избира изходна база от разнообразни въпроси, така че всички тестове за различните потребители  да се различават един от друг.<br />Освен това е възможно да се генерират произволен брой тестове в PDF формат, така че да могат да бъдат принтирани и използвани като за стандартен изпит.</li></ul>';
$tmx['d_logout_desc']='Кликни върху бутона, за да излезнеш от системата';
$tmx['d_tcexam_desc']='TCExam е софтуер за управление и провеждане на он-лайн тестове.';
$tmx['h_add']='добавя текущия запис към базата данни';
$tmx['h_add_image']='въвежда избраната снимка в текста';
$tmx['h_add_object']='въвежда избрания обект в текста';
$tmx['h_add_questions']='въвежда избрания тип на въпросите';
$tmx['h_add_subject']='въвежда избраната тема за този тест';
$tmx['h_add_tag']='въвежда избрания елемент';
$tmx['h_allow_no_answer']='ако е избрано, допълнителен избор -без отговор- ще се добави към всеки въпрос';
$tmx['h_answer']='възможен отговор за избрания въпрос';
$tmx['h_answer_isright']='избери тази опция, ако отговора е верен';
$tmx['h_answer_right']='верен отговор';
$tmx['h_answer_score']='точки за този въпрос (например: 0.5, -0.1, ...)';
$tmx['h_answer_selected']='избрания отговор';
$tmx['h_answer_time']='средно време за отговор в мин:сек';
$tmx['h_answer_wrong']='грешен отговор';
$tmx['h_answers_right']='верни отговори';
$tmx['h_answers_wrong']='грешни отговори';
$tmx['h_birth_date']='дата на раждане на потребителя';
$tmx['h_birth_place']='родно място на потребителя (град, област, страна)';
$tmx['h_cancel']='отмени промени или текущата операция';
$tmx['h_cancel_window']='затвори форма и отмени промени';
$tmx['h_clear']='настройва полетата на формата да бъдат празни';
$tmx['h_close_window']='затваря прозореца';
$tmx['h_continue']='продължи теста';
$tmx['h_database']='променя базата данни';
$tmx['h_delete']='изтрива текущия запис от базата данни';
$tmx['h_display_all']='показва всички отговори включително тези, които са вече оценени';
$tmx['h_display_user_info']='показва данните на потребителя, който е написал този отговор';
$tmx['h_email_all_results']='изпраща е-майл с репорти от теста до всички потребители';
$tmx['h_email_result']='изпраща е-майл с репорт от теста до потребителите';
$tmx['h_enable_single_answer']='ако е избрано, позволява само единичен отговор';
$tmx['h_enable_multiple_answers']='ако е избрано, позволява избор на няколко отговора';
$tmx['h_enable_free_answer']='ако е избрано, позволява даването на свободен отговор';
$tmx['h_enabled']='разреши/забрани текущия запис';
$tmx['h_execute']='стартира теста';
$tmx['h_file_type']='тип на файла';
$tmx['h_file_type_xml']='разширяем маркиращ език (XML)';
$tmx['h_file_type_csv']='Текстов файл разделен с табове';
$tmx['h_firstname']='име на потребителя (например: Михаил, Иван, ...)';
$tmx['h_fiscal_code']='номер на лична карта на потребителя';
$tmx['h_global_score']='ако е избрано, презаписва точките на отговора с точките по-долу';
$tmx['h_group_name']='име на групата на потребителя';
$tmx['h_guide']='помощ';
$tmx['h_index']='главна страница';
$tmx['h_info']='относно TCExam';
$tmx['h_ip']='IP адрес на компютъра, от който са били изпратени данните';
$tmx['h_ip_range']='списък на позволените IP адреси разделени чрез запетайки (например: 192.168.*.*,127.0.0.*,192.168.234.16-192.168.234.32,::ffff:c0a8:0110-::ffff:c0a8:0140)';
$tmx['h_lastname']='Фамилия на потребителя (например: Петров, Иванов, ...)';
$tmx['h_level']='Ниво на потребителя, ниво 0 означава анонимен потребител (нерегистриран), ниво 1 означава основен потребител, ниво 10 означава администратор с пълни права на достъп';
$tmx['h_login_button']='кликни тук за да се логнеш';
$tmx['h_login_name']='потребителско име, името което се използва за да се логнеш в системата';
$tmx['h_logout_link']='кликни на този линк, за да излезнеш от системата (край на сесията)';
$tmx['h_num_answers']='максимален брой на алтернативни отговори за всеки въпрос';
$tmx['h_num_questions']='максимален брой въпроси';
$tmx['h_num_tquestions']='максимален брой на отворените отговори';
$tmx['h_object_width']='ширина на обекта [пиксели]';
$tmx['h_object_height']='височина на обекта [пиксели]';
$tmx['h_password']='парола, буквено-цифрен код, който заедно с потребителското име дава достъп до тази система';
$tmx['h_password_repeat']='повтори паролата в това поле, за да се проверят възможни печатни грешки';
$tmx['h_pdf']='генерира PDF документ';
$tmx['h_pdf_all']='генерира подробен репорт за всеки потребител';
$tmx['h_pdf_offline_test']='генерира PDF документи за офф-лайн провеждане на тестове';
$tmx['h_preview']='показва предишно въведени кодове';
$tmx['h_question']='въпрос свързан с избраната тема';
$tmx['h_question_answered']='на този въпрос вече е било отговорено';
$tmx['h_question_not_answered']='на този въпрос не е било отговаряно';
$tmx['h_question_description']='тип на въпроса (например: истина, лъжа, ...)';
$tmx['h_question_difficulty']='ниво на трудност - коефициент за основни точки';
$tmx['h_question_displayed']='този въпрос е бил показан';
$tmx['h_question_not_displayed']='този въпрос не е бил показан';
$tmx['h_question_recurrence']='повторение на този въпрос в различните тестове';
$tmx['h_question_type']='тип на въпроса';
$tmx['h_questions_unanswered']='неотговорени въпроси';
$tmx['h_questions_undisplayed']='непоказани въпроси';
$tmx['h_questions_unrated']='въпроси, които не са причислени към дадена категория';
$tmx['h_random_answers']='ако е избрано, произволно извлича разнообразни отговори свързани с всеки въпрос';
$tmx['h_random_questions']='ако е избрано, произволно извлича отговорите свързани с всяка избрана тема';
$tmx['h_regcode']='регистрационен номер, регистрационен номер на потребителя';
$tmx['h_regdate']='дата на регистрация на потребителя';
$tmx['h_result']='показва резултатите от теста';
$tmx['h_results_to_users']='ако е избрано, позволява на потребителите да виждат резултатите';
$tmx['h_select_question']='избери този въпрос';
$tmx['h_score']='точки за този отговор';
$tmx['h_score_average']='среден резултат';
$tmx['h_score_right']='основни точки за всяко ниво на трудност на въпросите';
$tmx['h_score_total']='краен резултат';
$tmx['h_score_unanswered']='точки за неотговорени въпроси (например: 0, -0.5, ...)';
$tmx['h_score_wrong']='точки за грешни отговори (например: 0, -0.1, ...)';
$tmx['h_select_answer']='избери отговорите, които да бъдат оценени';
$tmx['h_select_user']='отваря избраната от потребителя страница';
$tmx['h_subject']='тема на теста';
$tmx['h_subject_description']='описание на темата на теста';
$tmx['h_subject_name']='име на темата на теста';
$tmx['h_subjects']='списък на темите за теста';
$tmx['h_submit']='изпраща данни на формата към извикващия процес';
$tmx['h_tcecode_editor']='редактор, който позволява текстообработка чрез използване на прост личен код';
$tmx['h_test']='тест, изпит';
$tmx['h_test_description']='описание на теста';
$tmx['h_test_name']='име на теста';
$tmx['h_test_time']='максимална продължителност на теста в минути';
$tmx['h_time_begin']='дата и час на започване на теста [гггг-мм-дд чч:мм:сс]';
$tmx['h_time_end']='дата и час на край на теста [гггг-мм-дд чч:мм:сс]';
$tmx['h_update']='обновява текущите данни';
$tmx['h_upload_image']='определя пътя на снимката, която ще бъде изпратена до сървъра';
$tmx['h_upload_file']='определя пътя на файла, който ще бъде изпратен до сървъра';
$tmx['h_user_info']='показва информация за свързания потребител';
$tmx['h_usered_email']='е-майл на потребителя (например: name@example.com)';
$tmx['h_view_details']='показва детайли';
$tmx['h_csv_export']='извлича данни до CSV (текстов файл разделен с табове)';
$tmx['h_xml_export']='извлича данни до XML';
$tmx['hp_edit_answer']='С тази форма можете да управлявате всички възможни отговори свързани с избрания въпрос. Можете да добавите произволен брой правилни и грешни отговори. Не можете да променяте или изтривате отговор, който е част от тест, който вече е проведен, в този случай можете просто да го забраните чрез използване на бутона [изтрий]. Легенда: [+] Разрешен; [-] Забранен; [S] MCSA - въпрос с няколко отговора, но с единствен верен; [M] MCMA - въпрос с няколко верни отговора; [O] поставяне в последователен ред; [T] верен отговор; [F] грешен отговор.';
$tmx['hp_edit_group']='В тази форма можете да управлявате различните групи на потребителите.';
$tmx['hp_edit_question']='С тази форма можете да управлявате различните въпроси свързани с избраната тема. Тези въпроси ще бъдат с многовариантни отговори или с отворен отговор чрез използване на текстово поле. Не можете да променяте или изтривате въпрос, който е част от тест, който вече е проведен, в този случай можете просто да го забраните чрез бутона [изтрий]. Легенда: [+] Разрешен; [-] Забранен; [S] MCSA - въпрос с няколко отговора, но с единствен верен; [M] MCMA - въпрос с няколко верни отговора.';
$tmx['hp_edit_rating']='В този форма можете да определите точките за свободните отговори. Можете да видите данните на потребителя чрез избиране на полето \'данни на потребител\'. Също така полето \'покажи всички\' ти позволява да видиш и коригираш оценените вече отговори.';
$tmx['hp_edit_subject']='С тази форма можете да управлявате различните теми на теста. Въпросите в системата могат да бъдат разделени по тези теми. В даден тест може да има няколко теми. Не можете да променяте или изтривате тема, която е част от тест, който вече е проведен, в този случай можете просто да го забраните чрез бутона [изтрий]. Легенда: [+] Разреши; [-] Забрани;';
$tmx['hp_edit_tcecode']='С тази форма можете да добавяте снимки и да обработвате текст.';
$tmx['hp_edit_test']='В този форма можете да вмъквате, променяте или изтривате тестовете. За да вмъкнете тест трябва преди това да сте определили поне една тема съдържаща няколко въпроси и отговори. Само потребители с достатъчно права и валиден IP адрес могат да провеждат тестовете. Освен това, полето IP може да съдържа списък с валидни IP адреси разделени със запетаи. IP адреса може да съдържа и символа *, който е заместител за обхвата от 0 до 255. Теста ще бъде активен само за времето, което сме предвидили за него. Веднъж стартиран, теста ще трябва да бъде завършен преди да е свършило максимално определеното време. Тестовете могат да съдържат няколко теми с различен тип въпроси, които ще бъдат произволно извлечени. Също така можете да определите базисни точки. Точки са в зависимост от нивото на трудност на въпросите. Не можете да порменяте тест, който вече е бил проведен. Когато даден тест е изтрит, се записва като log (данни на теста). Бутона [генерирай] позволява да се генерират произволен брой, неповтарящи се тестове в PDF формат, така че да могат да бъдат изпринтирани и проведени без нуждата от компютър.';
$tmx['hp_edit_user']='В тази форма можете да управлявате различните потребители, които имат право на достъп до системата. За всеки потребител можете да избирате име, парола и ниво на достъп. Ниво на достъп 0 означава анонимен потребител (нерегистриран), ниво на достъп 1 - основен потребител (например: студент), ниво на достъп 10 - администратор с права за пълен достъп.';
$tmx['hp_email_result']='Изпрати резултатите до потребителите чрез е-майл';
$tmx['hp_import_xml_questions']='С тази форма можете да импортирате въпроси към избраната тема от XML файл.';
$tmx['hp_import_xml_users']='С тази форма можете да импортирате потребители и групи от XML файл или CSV (текстов файл разделен с табове). Файловите формати са същите като тези получени при изнасянето на данни от Формата за избор на потребители';
$tmx['hp_login']='За да достъпите различните секции на TCExam първо трябва да се логнете с потребителското име и парола, които са ви дадени от системния администратор.';
$tmx['hp_online_users']='Тази форма показва потребителите, които в момента са логнати в системата';
$tmx['hp_public_index']='Това е главната страница на TCExam. От тази страница можете да стартирате или продължите вашите тестове';
$tmx['hp_result_questions']='Тази страница показва статистически данни за избрания тест. Чрез кликване върху заглавието на колоните можете да променяте подредбата им в таблицата. Чрез кликване върху номера на реда можете да достъпите страницата за промени за избрания въпрос.';
$tmx['hp_result_user']='Тази страница показва подробностите за теста, който е избран за потребителя. Данните за всеки ред са: <br />   номер на въпроса. [резултат] (IP на потребителя | време показано в чч:мм:сс| време на последна промяна показано в чч:мм:сс| време за отговор показано в мм:сс ) <br />Символа ® означава правилно отговорен въпрос, докато отговорите избрани от потребителя се отбелязват с \'x\'. Бутона [PDF] показва резултатите в  PDF документ.';
$tmx['hp_select_all_questions']='В тази форма можете да видите и изберете всички въпроси и свързаните с тях отговори за дадена тема.';
$tmx['hp_select_users']='В тази форма можете разгледате и изберете регистрираните потребители. Можете да променяте подредбата им чрез кликване върху заглавието на колоните.';
$tmx['hp_sending_in_progress']='Е-майла се изпраща. Моля изчакайте, докато процеса завърши.';
$tmx['hp_test_execute']='Тази страница позволява да проведете избрания тест.';
$tmx['hp_test_info']='Показва информация за избрания тест.';
$tmx['hp_test_results']='Тази страница показва резултатите от избрания тест. Резултатите са само от въпросите от типа с няколко верни отговора.';
$tmx['m_authorization_denied']='УПЪЛНОМОЩАВАНЕТО ОТКАЗАНО!';
$tmx['m_databasempty']='базата данни е празна!';
$tmx['m_delete_anonymous']='нерегистрирания потребител не може да бъде изтрит';
$tmx['m_delete_confirm']='потвърди изтриването';
$tmx['m_delete_confirm_test']='изтриването на този тест ще доведе до изтриване и на свързаните с него логове (резултати от тестове)';
$tmx['m_delete_prohibited']='този запис не може да бъде изтрит';
$tmx['m_deleted']='записът беше преместен от базата данни';
$tmx['m_different_passwords']='паролите са различни';
$tmx['m_empty_password']='полето за парола е празно';
$tmx['m_disabled_vs_deleted']='записа беше забранен, не може да бъде изтрит, защото се използва от други таблици. Ще можете да изтриете този запис само след изтриване на теста, в който е бил използван.';
$tmx['m_duplicate_answer']='този отговор е бил вече въведен';
$tmx['m_duplicate_name']='това име е вече заето, трябва да използвате друго';
$tmx['m_duplicate_regnumber']='този регистрационен номер вече е зает, трябва да използвате друг';
$tmx['m_duplicate_ssn']='този номер на лична карта е зает, трябва да използвате друг';
$tmx['m_duplicate_question']='този въпрос вече и бил въведен';
$tmx['m_exam_end_time']='Съжалявам, времето за попълване на теста изтече!';
$tmx['m_form_missing_fields']='някои от задължителните полета не е било попълнено';
$tmx['m_form_wrong_fields']='Използван е грешен формат при попълване на някои от полетата';
$tmx['m_group_deleted']='групата беше преместена от базата данни';
$tmx['m_group_updated']='данните на потребителя бяха обновени';
$tmx['m_importing_complete']='импортирането от XML завършено';
$tmx['m_login_wrong']='грешен потребител / парола';
$tmx['m_mailerror_authenticate']='[SMTP] Не може да удостовери.';
$tmx['m_mailerror_connect_host']='[SMTP] Не може да се свърже с SMTP хост.';
$tmx['m_mailerror_data_not_accepted']='[SMTP] Данните не са приети.';
$tmx['m_mailerror_encoding']='Непознат шифър:';
$tmx['m_mailerror_execute']='Не може да изпълни:';
$tmx['m_mailerror_file_access']='Не може да достъпи файла:';
$tmx['m_mailerror_file_open']='Не може да отвори файла:';
$tmx['m_mailerror_from_failed']='Следния от адресите не успя:';
$tmx['m_mailerror_instantiate']='Не може да инициализира майл функция.';
$tmx['m_mailerror_mailer_not_supported']='Програма за адресиране на писма не се поддържа.';
$tmx['m_mailerror_provide_address']='Трябва да запишите адреса на поне един е-майл получател.';
$tmx['m_mailerror_recipients_failed']='[SMTP] Не достигна до следните получатели:';
$tmx['m_mailerror_signing']='Signing Error: ';
$tmx['m_mailerror_smtp_error']='SMTP server error: ';
$tmx['m_mailerror_empty_message']='Message body empty';
$tmx['m_mailerror_invalid_address']='Invalid address';
$tmx['m_mailerror_variable_set']='Cannot set or reset variable: ';
$tmx['m_new_window_link']='този линк ще отвори нов браузър';
$tmx['m_no_test_available']='няма налични тестове!';
$tmx['m_process_completed']='процеса е завършен';
$tmx['m_search_void']='нищо намерено';
$tmx['m_unanswered']='без отговор';
$tmx['m_unknown_email']='непознат е-майл';
$tmx['m_update_restrict']='записът не може да бъде обновен, защото се използва от други таблици.';
$tmx['m_updated']='записът беше обновен';
$tmx['m_upload_not']='не може да изпрати файла';
$tmx['m_upload_yes']='файла е коректно изпратен';
$tmx['m_used_not_update']='записа не може да бъде обновен, защото се използва в таблица на резултатите на теста. Ще можете да променяте този запис само след като изтриете теста, който го използва. Можете да го забраните чрез бутона [изтрий].';
$tmx['m_used_not_update_test']='записа не може да бъде обновен, защото се използва в таблица на резултатите на теста.';
$tmx['m_user_deleted']='потребителя беше преместен от базата данни';
$tmx['m_user_updated']='данните на потребителя бяха обновени';
$tmx['t_answers_editor']='Управление на многовариантните отговори';
$tmx['t_email_result']='изпрати резултати';
$tmx['t_error']='ГРЕШКА';
$tmx['t_group_editor']='Управление на групите';
$tmx['t_group_select']='Списък на група';
$tmx['t_help']='Помощ';
$tmx['t_image_upload']='Добави снимка';
$tmx['t_login_form']='Вход';
$tmx['t_main']='TCExam';
$tmx['t_message']='СЪОБЩЕНИЕ';
$tmx['t_online_users']='потребители он-лайн';
$tmx['t_page_guide']='TCExam :: Помощ';
$tmx['t_page_info']='Относно TCExam';
$tmx['t_public_index']='TCExam :: Изпълнение на теста';
$tmx['t_questions_editor']='Управление на въпросите';
$tmx['t_questions_list']='Списък на въпросите';
$tmx['t_question_importer']='Въвеждане на въпроси';
$tmx['t_rating_editor']='Оценяване на свободните отговори';
$tmx['t_result_all_users']='Обобщение на резултатите от тестовете';
$tmx['t_result_questions']='Статистики на въпросите';
$tmx['t_result_user']='Резултати от теста';
$tmx['t_subjects_editor']='Управление на темите';
$tmx['t_tcecode_editor']='Текстообработка';
$tmx['t_test_execute']='Изпълнение на тест';
$tmx['t_test_info']='Информация за теста';
$tmx['t_test_results']='Резултати от теста';
$tmx['t_tests_editor']='Управление на теста';
$tmx['t_third_parties']='Third-party софтуер';
$tmx['t_user_editor']='Управление на потребител';
$tmx['t_user_importer']='Въвеждане на потребители';
$tmx['t_user_select']='Избор на потребителите';
$tmx['t_warning']='ВНИМАНИЕ';
$tmx['w_add']='добави';
$tmx['w_add_questions']='добави въпроси';
$tmx['w_add_subject']='добави тема';
$tmx['w_allow_no_answer']='без отговор';
$tmx['w_anonymous']='нерегистриран';
$tmx['w_answer']='отговор';
$tmx['w_answer_time']='време';
$tmx['w_answers']='отговори';
$tmx['w_answers_right']='правилно';
$tmx['w_answers_right_th']='правилно';
$tmx['w_answers_wrong']='грешно';
$tmx['w_answers_wrong_th']='грешно';
$tmx['w_ascent']='напред';
$tmx['w_attachment']='прикачен';
$tmx['w_author']='автор';
$tmx['w_birth_date']='дата на раждане';
$tmx['w_birth_place']='родно място';
$tmx['w_cancel']='отмени';
$tmx['w_city']='град';
$tmx['w_clear']='изчисти';
$tmx['w_clock_timer']='часовник / таймер';
$tmx['w_close']='затвори';
$tmx['w_code']='код';
$tmx['w_confirm']='потвърди';
$tmx['w_continue']='продължи';
$tmx['w_country']='държава';
$tmx['w_database']='база данни';
$tmx['w_date_format']='[гггг-мм-дд]';
$tmx['w_datetime_format']='[гггг-мм-дд чч:мм:сс]';
$tmx['w_delete']='изтрий';
$tmx['w_descent']='слизане';
$tmx['w_description']='описание';
$tmx['w_disabled']='забранен';
$tmx['w_display_all']='покажи всичко';
$tmx['w_display_user_info']='данни на потребител';
$tmx['w_edit']='промени';
$tmx['w_email']='е-майл';
$tmx['w_email_all_results']='изпрати е-майли';
$tmx['w_email_result']='изпрати е-майл';
$tmx['w_group']='група';
$tmx['w_groups']='групи';
$tmx['w_group_select']='списък на групите';
$tmx['w_single_answer']='единичен отговор';
$tmx['w_multiple_answers']='многовариантни отговори';
$tmx['w_free_answer']='отворен отговор';
$tmx['w_enabled']='разрешен';
$tmx['w_end']='край';
$tmx['w_execute']='изпълни';
$tmx['w_filter']='филтър';
$tmx['w_firstname']='име';
$tmx['w_fiscal_code']='лична карта';
$tmx['w_generate']='генерирай';
$tmx['w_global_score']='общ резултат';
$tmx['w_guide']='помощ';
$tmx['w_height']='височина';
$tmx['w_help']='помощ';
$tmx['w_image']='снимка';
$tmx['w_index']='индекс';
$tmx['w_import']='импорт';
$tmx['w_info']='инфо';
$tmx['w_ip']='IP';
$tmx['w_ip_range']='разрешен IP адрес';
$tmx['w_jump_menu']='отиди към навигационното меню';
$tmx['w_jump_timer']='отиди към часовник/таймер';
$tmx['w_jump_questions']='отиди към списък с въпроси';
$tmx['w_lastname']='фамилия';
$tmx['w_level']='ниво';
$tmx['w_levels']='нива';
$tmx['w_license']='лиценз';
$tmx['w_list']='списък';
$tmx['w_login']='влез';
$tmx['w_logout']='изход';
$tmx['w_main']='главна';
$tmx['w_max_score']='максимален резултат';
$tmx['w_minutes']='мин';
$tmx['w_modify']='променя';
$tmx['w_name']='име';
$tmx['w_name_first']='име';
$tmx['w_name_last']='фамилия';
$tmx['w_next']='следващ';
$tmx['w_notes']='забележки';
$tmx['w_num_answers']='брой отговори';
$tmx['w_num_questions']='брой въпроси';
$tmx['w_num_tquestions']='брой на въпросите с отворен отговор';
$tmx['w_number_of_records']='брой записи';
$tmx['w_object']='обект';
$tmx['w_online']='он-лайн';
$tmx['w_page']='страница';
$tmx['w_password']='парола';
$tmx['w_pdf']='PDF';
$tmx['w_pdf_all']='PDF тестове';
$tmx['w_pdf_offline_test']='PDF офф-лайн тест';
$tmx['w_place']='място';
$tmx['w_postal_code']='zip';
$tmx['w_preview']='предварителен преглед';
$tmx['w_previous']='предишен';
$tmx['w_print']='печат';
$tmx['w_province']='област/град';
$tmx['w_question']='въпрос';
$tmx['w_question_difficulty']='трудност';
$tmx['w_questions']='въпроси';
$tmx['w_questions_available']='налични въпроси';
$tmx['w_questions_unanswered']='неотговорен';
$tmx['w_questions_unanswered_th']='неотг.';
$tmx['w_questions_undisplayed']='непоказани';
$tmx['w_questions_undisplayed_th']='непок.';
$tmx['w_questions_unrated']='неизчислени';
$tmx['w_questions_unrated_th']='неизчислени';
$tmx['w_quote']='цитат';
$tmx['w_random_answers']='произволни отговори';
$tmx['w_random_questions']='произволни въпроси';
$tmx['w_rating']='оценка';
$tmx['w_record_status']='статус на записа';
$tmx['w_recurrence']='повторение';
$tmx['w_regcode']='регистрационен номер';
$tmx['w_regdate']='дата на регистрация';
$tmx['w_reload']='презареждам';
$tmx['w_result']='резултат';
$tmx['w_results']='резултати';
$tmx['w_results_to_users']='резултати на потребители';
$tmx['w_right']='вярно';
$tmx['w_skip_navigation']='пропусни навигационното меню';
$tmx['w_score']='точки';
$tmx['w_score_average']='средно';
$tmx['w_score_right']='основни точки';
$tmx['w_score_unanswered']='точки за неотговорен въпрос';
$tmx['w_score_wrong']='точки за грешен отговор';
$tmx['w_search']='търси';
$tmx['w_select']='избор';
$tmx['w_selection']='избор';
$tmx['w_show']='показва';
$tmx['w_start']='старт';
$tmx['w_stats']='статистики';
$tmx['w_street']='адрес';
$tmx['w_subject']='тема';
$tmx['w_subjects']='теми';
$tmx['w_submit']='потвърди';
$tmx['w_teacher']='преподавател';
$tmx['w_test']='тест';
$tmx['w_test_time']='време за теста';
$tmx['w_tests']='тестове';
$tmx['w_tests_available']='налични тестове';
$tmx['w_max_score']='максимален резултат';
$tmx['w_text']='текст';
$tmx['w_time']='време';
$tmx['w_time_begin']='начало';
$tmx['w_time_end']='край';
$tmx['w_time_hhmmss']='чч:мм:сс';
$tmx['w_time_mmss']='мм:сс';
$tmx['w_timestamp']='timestamp';
$tmx['w_type']='тип';
$tmx['w_update']='обнови';
$tmx['w_updated_at']='обновено към';
$tmx['w_upload']='изпрати';
$tmx['w_upload_file']='прикрепи файл';
$tmx['w_user']='потребител';
$tmx['w_username']='потребителско име';
$tmx['w_users']='потребители';
$tmx['w_weight']='тежест';
$tmx['w_width']='ширина';
$tmx['w_no']='не';
$tmx['w_xml']='XML';
$tmx['w_yes']='да';
$tmx['w_undo']='назад';
$tmx['w_redo']='напред';
$tmx['h_undo']='отмени последното действие';
$tmx['h_redo']='повтори последното действие';
$tmx['h_submit_file']='потвърди файла';
$tmx['w_questions_for']='въпроси за';
$tmx['m_unavailable_questions']='избраните въпроси не са налични в базата данни';
$tmx['w_status']='статус';
$tmx['w_lock']='заключи';
$tmx['w_unlock']='отключи';
$tmx['w_locked']='заключен';
$tmx['w_unlocked']='отключен';
$tmx['h_add_five_minutes']='добавя 5 минути';
$tmx['w_terminate']='завърши';
$tmx['w_terminate_exam']='завърши изпита';
$tmx['m_confirm_test_termination']='потвърди завършването на теста';
$tmx['w_comment']='коментар';
$tmx['h_testcomment']='коментар за теста';
$tmx['t_translations']='Преводи';
$tmx['w_position']='позиция';
$tmx['w_ordering_answer']='подредба на отговорите';
$tmx['h_enable_ordering_answer']='ако е избрано, позволява метода за подредба на отговорите';
$tmx['t_user_registration']='Нова регистрация на потребител';
$tmx['hp_user_registration']='Тази форма ви позволява да създавате нов потребителски акаунт.';
$tmx['w_user_registration_link']='Нямате акаунт? Създай акаунт.';
$tmx['m_user_verification_sent']='съобщение за потвърждение беше изпратено до този адрес';
$tmx['m_user_registration_ok']='потребителя е успешно регистриран';
$tmx['w_i_agree']='Съгласен съм със сроковете и условията в договора';
$tmx['w_registration_verification']='Потвърждение на регистрацията';
$tmx['m_email_registration']='<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="bg" lang="bg" dir="ltr"><body><p>Това е автоматичен отговор за потвърждение <a href="#TCEXAMURL#">TCExam</a> на заявката за регистрация на нов потребител.<br />Изисква потвърждение за е-мейл #EMAIL# потвърден от отдалечен IP #USERIP#.<br />Ако това съобщение генерира грешка при изпращането, моля не обръщайте внимание.<br /><br /><b>ЗА ДА ПОТВЪРДИТЕ РЕГИСТРАЦИЯТА ИЗПОЛЗВАЙТЕ СЛЕДНИЯ ЛИНК:<br /><a href="#SUBSCRIBEURL#">#SUBSCRIBEURL#</a></b></p></body></html>';
$tmx['w_timer']='брояч [сек]';
$tmx['h_question_timer']='максимален брой секунди за показване на въпроса (0 = забрани брояч)';
$tmx['w_fullscreen']='цял екран';
$tmx['h_question_fullscreen']='разреши/забрани показване в цял екран за този въпрос';
$tmx['h_position']='поправи последователността при визуализация';
$tmx['w_order']='последователност';
$tmx['w_selection']='избор';
$tmx['w_test_score_threshold']='точки за преминаване на изпита';
$tmx['h_test_score_threshold']='минимум изисквани точки за преминаване на изпита';
$tmx['w_mcma_radio']='радио-бутони за въпроси от типа MCMA (въпрос с няколко верни отговора)';
$tmx['h_mcma_radio']='ако е избрано, използва радио-бутони вместо checkbox бутони при въпросите от вида MCMA (въпрос с няколко верни отговора)';
$tmx['w_enable_noanswer']='\'без отговор\' опции';
$tmx['h_enable_noanswer']='ако е избрано, разрешава опциите \'без отговор\' като алтернативни отговори';
$tmx['w_enable_menu']='меню на въпросите';
$tmx['h_enable_menu']='ако е избрано , разрешава менюто за навигация на въпросите';
$tmx['w_enable_comment']='коментар за теста';
$tmx['h_enable_comment']='ако е избрано, разрешава текстово поле, в което да бъде вписан обобщен коментар за теста.';
$tmx['w_report_to_users']='отчети за потребители';
$tmx['h_report_to_users']='ако е избрано, разрешава на потребителите да разгледат подробен отчет за теста';
$tmx['w_passed']='ПРЕМИНАЛ';
$tmx['w_not_passed']='НЕПРЕМИНАЛ';
$tmx['w_inline_answers']='отговори в една редица';
$tmx['h_question_inline_answers']='ако е избрано, показва въпросите един до друг.';
$tmx['w_auto_next']='автоматично преминаване към следващия';
$tmx['h_question_auto_next']='ако е избрано, преминава автоматично към следващия въпрос при отговор на въпрос от вида MCSA (въпрос с няколко отговора, но единствен верен).';
$tmx['w_keyboard_key']='избор с бутон';
$tmx['h_answer_keyboard_key']='бутон от клавиатурата (по избор) се използва, за да избереш този отговор';
$tmx['w_reaction']='реакция';
$tmx['w_true']='верен';
$tmx['w_false']='грешен';
$tmx['w_true_acronym']='T';
$tmx['w_false_acronym']='F';
$tmx['w_unanswered_acronym']='U';
$tmx['w_required']='задължителен';
$tmx['w_not_required']='незадължителен';
$tmx['w_details']='подробности';
$tmx['w_hide_answers']='скрий отговори';
$tmx['w_enable']='разреши';
$tmx['w_disable']='забрани';
$tmx['w_copy']='копирай';
$tmx['w_move']='премести';
$tmx['w_from']='от';
$tmx['w_to']='в';
$tmx['w_check_all']='маркирай всичко';
$tmx['w_uncheck_all']='размаркирай всичко';
$tmx['m_with_selected']='с избраното:';
$tmx['w_module']='модул';
$tmx['w_modules']='модули';
$tmx['t_modules_editor']='Управление на Модули';
$tmx['hp_edit_module']='С тази форма можете да управлявате различните модули. Темите в системата могат да бъдат включени в каталог в зависимост от тези модули. В един тест може да има няколко модула. Не може да променяте или изтривате модул, който е част от тест, който вече е бил проведен, в този случай можете просто да го забраните чрез бутона [изтрий]. Легенда: [+] Разрешен; [-] Забранен;';
$tmx['w_all']='всичко';
$tmx['w_number']='number';
$tmx['w_minimum']='minimum';
$tmx['w_maximum']='maximum';
$tmx['w_sum']='sum';
$tmx['w_sumsq']='square sum';
$tmx['w_mean']='mean';
$tmx['w_median']='median';
$tmx['w_mode']='mode';
$tmx['w_range']='range';
$tmx['w_variance']='variance';
$tmx['w_standard_deviation']='standard deviation';
$tmx['w_statistics']='statistics';
$tmx['w_skewness']='skewness';
$tmx['w_kurtosi']='kurtosi';
$tmx['t_all_results_user']='User\'s Results';
$tmx['hp_allresults_user']='This form summarize the results of the specified user.';
$tmx['hp_result_alluser']='Тази форма обобщава резултатите на всички потребители за избрания тест.';
$tmx['h_module_name']='name of the module';
$tmx['w_explanation']='explanation';
$tmx['h_explanation']='explanation to be printed on results';
$tmx['w_repeatable']='repeatable';
$tmx['h_repeatable_test']='users can repeat this test several times';
$tmx['w_repeat']='repeat';
$tmx['h_repeat_test']='repeat this test (current results will be deleted)';
$tmx['w_calendar']='calendar';
$tmx['m_score_higher_than_max']='the selected score is higher than maximum allowed';
$tmx['w_mcma_partial_score']='partial score for MCMA';
$tmx['h_mcma_partial_score']='if selected, uses partial score for MCMA questions';
$tmx['h_logout_on_timeout']='if selected, logs out the user when the time expires';
$tmx['w_logout_on_timeout']='logout when time expires';
$tmx['t_backup_editor']='Database Backup and Restore';
$tmx['w_backup']='backup';
$tmx['w_restore']='restore';
$tmx['w_backup_file']='backup file';
$tmx['h_backup']='create a new backup';
$tmx['h_restore']='restore the selected backup';
$tmx['m_backup_completed']='backup has been sucessfully created';
$tmx['m_restore_completed']='restore has been sucessfully created';
$tmx['m_restore_confirm']='confirm restoring';
$tmx['hp_edit_backups']='This page allows you to make and restore database backups (works only on POSIX systems with MySQL or PostgreSQL).
Push the [backup] button to create a new TCExam database dump in compressed SQL format (structure and data).
To restore an existing backup archive, select it and push the [restore] button.
Note that before each restore the system automatically execute a new backup, so you can undo the operation.
Backup files are stored on the "cache/backup" folder using the following syntax: YYYYMMDDhhmmss_tcexam_backup.sql.gz , where YYYYMMDDhhmmss are the digits of year (Y), month (M), day (D), hour (h), minutes (m), seconds (s).';

// EOF ----------
?>