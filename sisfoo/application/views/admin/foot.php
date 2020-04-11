<!-- jQuery -->
    <script src="<?php echo base_url('assets/admin/bower_components/jquery/dist/jquery.min.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/admin/bower_components/metisMenu/dist/metisMenu.min.js')?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/admin/dist/js/sb-admin-2.js')?>"></script>

	<script src="<?php echo base_url('assets/tinymce/tinymce.dev.js') ?>"></script>
	<script src="<?php echo base_url('assets/tinymce/plugins/table/plugin.dev.js') ?>"></script>
	<script src="<?php echo base_url('assets/tinymce/plugins/paste/plugin.dev.js') ?>"></script>
	<script src="<?php echo base_url('assets/tinymce/plugins/spellchecker/plugin.dev.js') ?>"></script>
	
	<script>
	tinymce.init({
		selector: "textarea#elm1",
		theme: "modern",
		plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor importcss colorpicker",
			"textpattern fullpage imagetools"
		],
		content_css: "css/development.css",
		add_unload_trigger: false,

		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table",

		template_replace_values : {
			user: "Jack Black"
		}, 

		spellchecker_callback: function(method, data, success) {
			if (method == "spellcheck") {
				var words = data.match(this.getWordCharPattern());
				var suggestions = {};

				for (var i = 0; i < words.length; i++) {
					suggestions[words[i]] = ["First", "second"];
				}

				success({words: suggestions, dictionary: true});
			}

			if (method == "addToDictionary") {
				success();
			}
		}
	});

	if (!window.console) {
		window.console = {
			log: function() {
				tinymce.$('<div></div>').text(tinymce.grep(arguments).join(' ')).appendTo(document.body);
			}
		};
	}
	
	function cmd(cmd, value) {
		tinymce.activeEditor.execCommand(cmd, false, value);
	}
	</script>
	
	<!-- DataTables JavaScript -->
    <script src="<?php echo base_url('assets/admin/bower_components/datatables/media/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/admin/dist/js/sb-admin-2.js')?>"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>