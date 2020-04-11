<?php

function is_publish($status)
{
	if ($status) {
		return "<div class='btn btn-xs btn-success'>Publish</div>";
	}

	return "<div class='btn btn-xs btn-danger'>Unpublish</div>";
}
