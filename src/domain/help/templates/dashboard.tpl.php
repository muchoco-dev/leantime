<?php
  $currentSprint = $this->get('sprint');
?>

<div class="center padding-lg">

    <div class="row">
        <div class="col-md-12">
            <h3 class="primaryColor"><?php echo $this->__('headlines.welcome_to_leantime') ?></h3>
            <p><?php echo $this->__('text.glad_youre_here') ?><br />
                 </p>
            <br /><br />
        </div>
    </div>

    <div class="row onboarding">
        <div class="col-md-4">
            <div style='width:50%' class='svgContainer'>
                <?php    echo file_get_contents(ROOT."/images/svg/undraw_scrum_board_cesn.svg");
                echo"</div>";?>

                <br />
            <h4 class="primaryColor">1. タスク管理</h4>

            <p>タスク管理ページでは、このプロジェクト全体のタスク(TODO)を管理しています。手が空いているときは積極的に未着手のタスクを解決しましょう。</p>

        </div>
        <div class="col-md-4">
            <div style='width:50%' class='svgContainer'>
                <?php    echo file_get_contents(ROOT."/images/svg/undraw_time_management_30iu.svg");
                echo"</div>";?>
                <br />
            <h4 class="primaryColor">2. 作業時間管理</h4>

            <p>タイムシートを使って、作業時間の記録を忘れないようにしてください。その記録を元に計画や報酬の計算、契約内容の判断を行っています。</p>
        </div>
        <div class="col-md-4">
            <div style='width:50%' class='svgContainer'>
                <?php    echo file_get_contents(ROOT."/images/svg/undraw_design_data_khdb.svg");
                echo"</div>";?>
                <br />
            <h4 class="primaryColor">3. 請求管理</h4>

            <p>月が変わったら、前月分の報酬額を計算してご請求ください。承認されると翌月10日までにご指定の口座にお振込みさせていただきます。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <br /><br />
            <p>
                <br /></p>
            <a href="javascript:void(0);" class="btn btn-primary" onclick="leantime.helperController.startDashboardTour()"><?php echo $this->__('buttons.take_full_tour') ?></a><br />
            <a href="<?=BASE_URL ?>/projects/newProject"><?php echo $this->__('links.skip_tour_start_project') ?></a><br />
            <a href="javascript:void(0);" onclick="leantime.helperController.hideAndKeepHidden('dashboard')"><?php echo $this->__('links.skip_tour_dont_show_again') ?></a>
        </div>
    </div>


</div>
