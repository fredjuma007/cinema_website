if (jQuery_1_8_2.datagrid !== undefined) {
	jQuery_1_8_2.extend(jQuery_1_8_2.datagrid.messages, {
		empty_result: "No records found",
		choose_action: "Choose Action",
		goto_page: "Go to page:",
		total_items: "Total items:",
		items_per_page: "Items per page",
		prev_page: "Prev page",
		prev: "« Prev",
		next_page: "Next page",
		next: "Next »",
		month_names: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
		day_names: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
		delete_title: "Delete confirmation",
		delete_text: "Are you sure you want to delete selected record?",
		action_empty_title: "No records selected",
		action_empty_body: "You need to select at least a single record.",
		action_title: "Action confirmation",
		btn_ok: "OK",
		btn_cancel: "Cancel",
		btn_delete: "Delete"
	});
}

if (jQuery_1_8_2.multilang !== undefined) {
	jQuery_1_8_2.extend(jQuery_1_8_2.multilang.messages, {
		tooltip: "Click on the flag icon to choose which language version of the content you wish to edit."
	});
}

if (tbApp !== undefined) {
	tbApp = jQuery_1_8_2.extend(tbApp, {
		locale: {
			button: {"cancel":"Cancel","delete":"Delete","no":"No","ok":"OK","save":"Save","set":"Set","yes":"Yes"}		}
	});
}