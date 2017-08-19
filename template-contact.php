<?php 
/**
 * Template Name: Contact
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header(); ?>


    <section id="about" class="s_about bg_light">
        <div class="section-header">
            <h2><?php the_title(); ?></h2>
            <div class="s_desc_wrap">
                <div class="s_desc"><?php echo $content =  get_page( $page_id )->post_content; // предполагаю, что $page_id уже правильный
$content = apply_filters('the_content', $content);  
$content = str_replace(']]>', ']]>', $content); ?></div>
            </div>
        </div>
        <div class="section-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contact-box">
                            <div class="contacts_icon icon-basic-mail"></div>
                            <h3>E-mail:</h3>
                            <p><a href="mailto:<?php echo ale_get_meta('mailto') ?>"><?php echo ale_get_meta('mailto') ?></a></p>
                        </div>
                        <div class="contact-box">
                        	<div class="contacts_icon icon-basic-smartphone"></div>
                        	<h3><?php _e('Телефон:', 'aletheme')?></h3>
                        	<p><?php echo ale_get_meta('phone_num') ?></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                         
                        <form class="main-form" id="forma">

                            <label class="form-group">
                                <span class="color_element">*</span> <?php _e('Ваше имя', 'aletheme')?>:
                                <input type="text" name="name" placeholder="<?php _e('Введите имя', 'aletheme')?>" data-validation-required-message="Вы не ввели имя" required />
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <span class="color_element">*</span> <?php _e('Ваш E-mail', 'aletheme')?>:
                                <input type="email" name="email" placeholder="<?php _e('Введите E-mail', 'aletheme')?>" data-validation-required-message="Не корректно введен E-mail" required />
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <span class="color_element">*</span> <?php _e('Тема сообщения', 'aletheme')?>:
                                <input type="text" name="sub" placeholder="<?php _e('Введите тему', 'aletheme')?>" data-validation-required-message="Вы не ввели тему сообщения" required />
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <span class="color_element">*</span> <?php _e('Ваше сообщение', 'aletheme')?>:
                                <textarea name="message" placeholder="<?php _e('Введите сообщение', 'aletheme')?>" data-validation-required-message="Вы не ввели сообщение" required></textarea>
                                <span class="help-block text-danger"></span>
                            </label>
                            <button type="submit"><?php _e('Отправить', 'aletheme')?></button>
                        </form>
                        <div id="note"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>