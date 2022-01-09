<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function Home(){
        return view('admin/index');
    }
    public function auth_login(){
        return view('admin/auth_login');
    }
    public function auth_lockscreen(){
        return view('admin/auth_lockscreen');
    }
    public function auth_register(){
        return view('admin/auth_register');
    }
    public function auth_user_pass(){
        return view('admin/auth_user_pass');
    }
    public function calender(){
        return view('admin/calender');
    }
    public function card_advanced(){
        return view('admin/card_advanced');
    }
    public function card_basic(){
        return view('admin/card_basic');
    }
    public function card_color(){
        return view('admin/card_color');
    }
    public function charts_chartjs(){
        return view('admin/charts_chartjs');
    }
    public function charts_chartist(){
        return view('admin/charts_chartist');
    }
    public function charts_flot(){
        return view('admin/charts_flot');
    }
    public function charts_inline(){
        return view('admin/charts_inline');
    }
    public function charts_morris(){
        return view('admin/charts_morris');
    }
    public function charts_peity(){
        return view('admin/charts_peity');
    }
    public function chat(){
        return view('admin/chat');
    }

   
    
    public function components_alerts(){
        return view('admin/components_alerts');
    }   
    public function components_badges(){
        return view('admin/components_badges');
    }
    public function components_buttons(){
        return view('admin/components_buttons');
    }
    public function components_dropdown(){
        return view('admin/components_dropdown');
    }
    public function components_modals(){
        return view('admin/components_modals');
    }    
    public function components_nestable(){
        return view('admin/components_nestable');
    }
    public function components_progress_bars(){
        return view('admin/components_progress_bars');
    }
    public function components_sliders(){
        return view('admin/components_sliders');
    }
    public function content_grid(){
        return view('admin/content_grid');
    }
    public function content_media(){
        return view('admin/content_media');
    }
    public function content_typography(){
        return view('admin/content_typography');
    }
    public function error_404(){
        return view('admin/error_404');
    }
    public function error_maintenance(){
        return view('admin/error_maintenance');
    }
    public function faq(){
        return view('admin/faq');
    }
    
    public function forms_advanced(){
        return view('admin/forms_advanced');
    }
    public function forms_code_editor(){
        return view('admin/forms_code_editor');
    }
    public function forms_dropzone(){
        return view('admin/forms_dropzone');
    }
    public function forms_editors(){
        return view('admin/forms_editors');
    }
    public function forms_general(){
        return view('admin/forms_general');
    }
    public function forms_validation(){
        return view('admin/forms_validation');
    }
    public function forms_wizard(){
        return view('admin/forms_wizard');
    }
    public function gallery(){
        return view('admin/gallery');
    }

    public function  icons_cryptocoins(){
        return view('admin/icons_cryptocoins');
    }
    public function icons_fontawesome(){
        return view('admin/icons_fontawesome');
    }
    public function icons_flag(){
        return view('admin/icons_flag');
    }
    public function icons_glyphicons(){
        return view('admin/icons_glyphicons');
    }
    public function icons_material(){
        return view('admin/icons_material');
    }
    public function icons_simpleline(){
        return view('admin/icons_simpleline');
    }
    public function icons_themify(){
        return view('admin/icons_themify');
    }    
    public function icons_weather(){
        return view('admin/icons_weather');
    }

      
    public function invoice(){
        return view('admin/invoice');
    }
    public function mailbox_compose(){
        return view('admin/mailbox_compose');
    }
    public function mailbox_inbox(){
        return view('admin/mailbox_inbox');
    }
    public function mailbox_read_mail(){
        return view('admin/mailbox_read_mail');
    }
    public function map_google(){
        return view('admin/map_google');
    }
    public function map_vector(){
        return view('admin/map_vector');
    }
    public function profile(){
        return view('admin/profile');
    }

    public function tables_data(){
        return view('admin/tables_data');
    }
    public function tables_simple(){
        return view('admin/tables_simple');
    }
    public function timeline(){
        return view('admin/timeline');
    }
    public function utilities_animations(){
        return view('admin/utilities_animations');
    }
    public function utilities_border(){
        return view('admin/utilities_border');
    }
    public function utilities_color(){
        return view('admin/utilities_color');
    }
    public function utilities_ribbons(){
        return view('admin/utilities_ribbons');
    }
    public function utilities_tab(){
        return view('admin/utilities_tab');
    }
    
  
    
}
