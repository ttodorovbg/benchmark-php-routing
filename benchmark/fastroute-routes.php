<?php 

$routes->addRoute('GET', '/addon', ['_route' => 'addon']);
$routes->addRoute('GET', '/addon/linkers', ['_route' => 'addon_linkers']);
$routes->addRoute('GET', '/addon/linkers/{linker_key}', ['_route' => 'addon_linkers_linker_key']);
$routes->addRoute('GET', '/addon/linkers/{linker_key}/values', ['_route' => 'addon_linkers_linker_key_values']);
$routes->addRoute('GET', '/addon/linkers/{linker_key}/values/{value_id}', ['_route' => 'addon_linkers_linker_key_values_value_id']);
$routes->addRoute('GET', '/hook_events', ['_route' => 'hook_events']);
$routes->addRoute('GET', '/hook_events/{subject_type}', ['_route' => 'hook_events_subject_type']);
$routes->addRoute('GET', '/pullrequests/{selected_user}', ['_route' => 'pullrequests_selected_user']);
$routes->addRoute('GET', '/repositories', ['_route' => 'repositories']);
$routes->addRoute('GET', '/repositories/{workspace}', ['_route' => 'repositories_workspace']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}', ['_route' => 'repositories_workspace_repo_slug']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/branch-restrictions', ['_route' => 'repositories_workspace_repo_slug_branch_restrictions']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/branch-restrictions/{id}', ['_route' => 'repositories_workspace_repo_slug_branch_restrictions_id']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/branching-model', ['_route' => 'repositories_workspace_repo_slug_branching_model']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/branching-model/settings', ['_route' => 'repositories_workspace_repo_slug_branching_model_settings']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commit/{commit}', ['_route' => 'repositories_workspace_repo_slug_commit_commit']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commit/{commit}/approve', ['_route' => 'repositories_workspace_repo_slug_commit_commit_approve']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commit/{commit}/comments', ['_route' => 'repositories_workspace_repo_slug_commit_commit_comments']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commit/{commit}/comments/{comment_id}', ['_route' => 'repositories_workspace_repo_slug_commit_commit_comments_comment_id']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commit/{commit}/properties/{app_key}/{property_name}', ['_route' => 'repositories_workspace_repo_slug_commit_commit_properties_app_key_property_name']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commit/{commit}/pullrequests', ['_route' => 'repositories_workspace_repo_slug_commit_commit_pullrequests']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commit/{commit}/reports', ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commit/{commit}/reports/{reportId}', ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commit/{commit}/reports/{reportId}/annotations', ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commit/{commit}/reports/{reportId}/annotations/{annotationId}', ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations_annotationId']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commit/{commit}/statuses', ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commit/{commit}/statuses/build', ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commit/{commit}/statuses/build/{key}', ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build_key']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commits', ['_route' => 'repositories_workspace_repo_slug_commits']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/commits/{revision}', ['_route' => 'repositories_workspace_repo_slug_commits_revision']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/components', ['_route' => 'repositories_workspace_repo_slug_components']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/components/{component_id}', ['_route' => 'repositories_workspace_repo_slug_components_component_id']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/default-reviewers', ['_route' => 'repositories_workspace_repo_slug_default_reviewers']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/default-reviewers/{target_username}', ['_route' => 'repositories_workspace_repo_slug_default_reviewers_target_username']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/deploy-keys', ['_route' => 'repositories_workspace_repo_slug_deploy_keys']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/deploy-keys/{key_id}', ['_route' => 'repositories_workspace_repo_slug_deploy_keys_key_id']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/deployments/', ['_route' => 'repositories_workspace_repo_slug_deployments']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/deployments/{deployment_uuid}', ['_route' => 'repositories_workspace_repo_slug_deployments_deployment_uuid']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/deployments_config/environments/{environment_uuid}/variables', ['_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/deployments_config/environments/{environment_uuid}/variables/{variable_uuid}', ['_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables_variable_uuid']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/diff/{spec}', ['_route' => 'repositories_workspace_repo_slug_diff_spec']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/diffstat/{spec}', ['_route' => 'repositories_workspace_repo_slug_diffstat_spec']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/downloads', ['_route' => 'repositories_workspace_repo_slug_downloads']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/downloads/{filename}', ['_route' => 'repositories_workspace_repo_slug_downloads_filename']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/environments/', ['_route' => 'repositories_workspace_repo_slug_environments']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/environments/{environment_uuid}', ['_route' => 'repositories_workspace_repo_slug_environments_environment_uuid']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/environments/{environment_uuid}/changes/', ['_route' => 'repositories_workspace_repo_slug_environments_environment_uuid_changes']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/filehistory/{commit}/{path}', ['_route' => 'repositories_workspace_repo_slug_filehistory_commit_path']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/forks', ['_route' => 'repositories_workspace_repo_slug_forks']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/hooks', ['_route' => 'repositories_workspace_repo_slug_hooks']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/hooks/{uid}', ['_route' => 'repositories_workspace_repo_slug_hooks_uid']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/issues', ['_route' => 'repositories_workspace_repo_slug_issues']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/issues/export', ['_route' => 'repositories_workspace_repo_slug_issues_export']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/issues/export/{repo_name}-issues-{task_id}.zip', ['_route' => 'repositories_workspace_repo_slug_issues_export_repo_name_issues_task_id_zip']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/issues/import', ['_route' => 'repositories_workspace_repo_slug_issues_import']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/issues/{issue_id}', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/issues/{issue_id}/attachments', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/issues/{issue_id}/attachments/{path}', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments_path']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/issues/{issue_id}/changes', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/issues/{issue_id}/changes/{change_id}', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes_change_id']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/issues/{issue_id}/comments', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/issues/{issue_id}/comments/{comment_id}', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments_comment_id']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/issues/{issue_id}/vote', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_vote']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/issues/{issue_id}/watch', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_watch']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/merge-base/{revspec}', ['_route' => 'repositories_workspace_repo_slug_merge_base_revspec']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/milestones', ['_route' => 'repositories_workspace_repo_slug_milestones']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/milestones/{milestone_id}', ['_route' => 'repositories_workspace_repo_slug_milestones_milestone_id']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/patch/{spec}', ['_route' => 'repositories_workspace_repo_slug_patch_spec']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines-config/caches/', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines-config/caches/{cache_uuid}', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines-config/caches/{cache_uuid}/content-uri', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid_content_uri']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines/', ['_route' => 'repositories_workspace_repo_slug_pipelines']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines/{pipeline_uuid}', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines/{pipeline_uuid}/steps/', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines/{pipeline_uuid}/steps/{step_uuid}', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines/{pipeline_uuid}/steps/{step_uuid}/log', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_log']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines/{pipeline_uuid}/steps/{step_uuid}/logs/{log_uuid}', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_logs_log_uuid']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines/{pipeline_uuid}/steps/{step_uuid}/test_reports', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines/{pipeline_uuid}/steps/{step_uuid}/test_reports/test_cases', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines/{pipeline_uuid}/steps/{step_uuid}/test_reports/test_cases/{test_case_uuid}/test_case_reasons', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases_test_case_uuid_test_case_reasons']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines/{pipeline_uuid}/stopPipeline', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_stopPipeline']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines_config', ['_route' => 'repositories_workspace_repo_slug_pipelines_config']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines_config/build_number', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_build_number']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines_config/schedules/', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines_config/schedules/{schedule_uuid}', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines_config/schedules/{schedule_uuid}/executions/', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid_executions']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines_config/ssh/key_pair', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_key_pair']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines_config/ssh/known_hosts/', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines_config/ssh/known_hosts/{known_host_uuid}', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts_known_host_uuid']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines_config/variables/', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_variables']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pipelines_config/variables/{variable_uuid}', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_variables_variable_uuid']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/properties/{app_key}/{property_name}', ['_route' => 'repositories_workspace_repo_slug_properties_app_key_property_name']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests', ['_route' => 'repositories_workspace_repo_slug_pullrequests']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/activity', ['_route' => 'repositories_workspace_repo_slug_pullrequests_activity']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}/activity', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_activity']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}/approve', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_approve']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}/comments', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}/comments/{comment_id}', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments_comment_id']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}/commits', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_commits']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}/decline', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_decline']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}/diff', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diff']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}/diffstat', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diffstat']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}/merge', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}/merge/task-status/{task_id}', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge_task_status_task_id']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}/patch', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_patch']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}/request-changes', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_request_changes']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pull_request_id}/statuses', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_statuses']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/pullrequests/{pullrequest_id}/properties/{app_key}/{property_name}', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties_app_key_property_name']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/refs', ['_route' => 'repositories_workspace_repo_slug_refs']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/refs/branches', ['_route' => 'repositories_workspace_repo_slug_refs_branches']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/refs/branches/{name}', ['_route' => 'repositories_workspace_repo_slug_refs_branches_name']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/refs/tags', ['_route' => 'repositories_workspace_repo_slug_refs_tags']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/refs/tags/{name}', ['_route' => 'repositories_workspace_repo_slug_refs_tags_name']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/src', ['_route' => 'repositories_workspace_repo_slug_src']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/src/{commit}/{path}', ['_route' => 'repositories_workspace_repo_slug_src_commit_path']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/versions', ['_route' => 'repositories_workspace_repo_slug_versions']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/versions/{version_id}', ['_route' => 'repositories_workspace_repo_slug_versions_version_id']);
$routes->addRoute('GET', '/repositories/{workspace}/{repo_slug}/watchers', ['_route' => 'repositories_workspace_repo_slug_watchers']);
$routes->addRoute('GET', '/snippets', ['_route' => 'snippets']);
$routes->addRoute('GET', '/snippets/{workspace}', ['_route' => 'snippets_workspace']);
$routes->addRoute('GET', '/snippets/{workspace}/{encoded_id}', ['_route' => 'snippets_workspace_encoded_id']);
$routes->addRoute('GET', '/snippets/{workspace}/{encoded_id}/comments', ['_route' => 'snippets_workspace_encoded_id_comments']);
$routes->addRoute('GET', '/snippets/{workspace}/{encoded_id}/comments/{comment_id}', ['_route' => 'snippets_workspace_encoded_id_comments_comment_id']);
$routes->addRoute('GET', '/snippets/{workspace}/{encoded_id}/commits', ['_route' => 'snippets_workspace_encoded_id_commits']);
$routes->addRoute('GET', '/snippets/{workspace}/{encoded_id}/commits/{revision}', ['_route' => 'snippets_workspace_encoded_id_commits_revision']);
$routes->addRoute('GET', '/snippets/{workspace}/{encoded_id}/files/{path}', ['_route' => 'snippets_workspace_encoded_id_files_path']);
$routes->addRoute('GET', '/snippets/{workspace}/{encoded_id}/watch', ['_route' => 'snippets_workspace_encoded_id_watch']);
$routes->addRoute('GET', '/snippets/{workspace}/{encoded_id}/watchers', ['_route' => 'snippets_workspace_encoded_id_watchers']);
$routes->addRoute('GET', '/snippets/{workspace}/{encoded_id}/{node_id}', ['_route' => 'snippets_workspace_encoded_id_node_id']);
$routes->addRoute('GET', '/snippets/{workspace}/{encoded_id}/{node_id}/files/{path}', ['_route' => 'snippets_workspace_encoded_id_node_id_files_path']);
$routes->addRoute('GET', '/snippets/{workspace}/{encoded_id}/{revision}/diff', ['_route' => 'snippets_workspace_encoded_id_revision_diff']);
$routes->addRoute('GET', '/snippets/{workspace}/{encoded_id}/{revision}/patch', ['_route' => 'snippets_workspace_encoded_id_revision_patch']);
$routes->addRoute('GET', '/teams', ['_route' => 'teams']);
$routes->addRoute('GET', '/teams/{username}', ['_route' => 'teams_username']);
$routes->addRoute('GET', '/teams/{username}/followers', ['_route' => 'teams_username_followers']);
$routes->addRoute('GET', '/teams/{username}/following', ['_route' => 'teams_username_following']);
$routes->addRoute('GET', '/teams/{username}/members', ['_route' => 'teams_username_members']);
$routes->addRoute('GET', '/teams/{username}/permissions', ['_route' => 'teams_username_permissions']);
$routes->addRoute('GET', '/teams/{username}/permissions/repositories', ['_route' => 'teams_username_permissions_repositories']);
$routes->addRoute('GET', '/teams/{username}/permissions/repositories/{repo_slug}', ['_route' => 'teams_username_permissions_repositories_repo_slug']);
$routes->addRoute('GET', '/teams/{username}/pipelines_config/variables/', ['_route' => 'teams_username_pipelines_config_variables']);
$routes->addRoute('GET', '/teams/{username}/pipelines_config/variables/{variable_uuid}', ['_route' => 'teams_username_pipelines_config_variables_variable_uuid']);
$routes->addRoute('GET', '/teams/{username}/projects/', ['_route' => 'teams_username_projects']);
$routes->addRoute('GET', '/teams/{username}/projects/{project_key}', ['_route' => 'teams_username_projects_project_key']);
$routes->addRoute('GET', '/teams/{username}/search/code', ['_route' => 'teams_username_search_code']);
$routes->addRoute('GET', '/teams/{workspace}/repositories', ['_route' => 'teams_workspace_repositories']);
$routes->addRoute('GET', '/user', ['_route' => 'user']);
$routes->addRoute('GET', '/user/emails', ['_route' => 'user_emails']);
$routes->addRoute('GET', '/user/emails/{email}', ['_route' => 'user_emails_email']);
$routes->addRoute('GET', '/user/permissions/repositories', ['_route' => 'user_permissions_repositories']);
$routes->addRoute('GET', '/user/permissions/teams', ['_route' => 'user_permissions_teams']);
$routes->addRoute('GET', '/user/permissions/workspaces', ['_route' => 'user_permissions_workspaces']);
$routes->addRoute('GET', '/users/{selected_user}', ['_route' => 'users_selected_user']);
$routes->addRoute('GET', '/users/{selected_user}/pipelines_config/variables/', ['_route' => 'users_selected_user_pipelines_config_variables']);
$routes->addRoute('GET', '/users/{selected_user}/pipelines_config/variables/{variable_uuid}', ['_route' => 'users_selected_user_pipelines_config_variables_variable_uuid']);
$routes->addRoute('GET', '/users/{selected_user}/properties/{app_key}/{property_name}', ['_route' => 'users_selected_user_properties_app_key_property_name']);
$routes->addRoute('GET', '/users/{selected_user}/search/code', ['_route' => 'users_selected_user_search_code']);
$routes->addRoute('GET', '/users/{selected_user}/ssh-keys', ['_route' => 'users_selected_user_ssh_keys']);
$routes->addRoute('GET', '/users/{selected_user}/ssh-keys/{key_id}', ['_route' => 'users_selected_user_ssh_keys_key_id']);
$routes->addRoute('GET', '/users/{username}/members', ['_route' => 'users_username_members']);
$routes->addRoute('GET', '/users/{workspace}/repositories', ['_route' => 'users_workspace_repositories']);
$routes->addRoute('GET', '/workspaces', ['_route' => 'workspaces']);
$routes->addRoute('GET', '/workspaces/{workspace}', ['_route' => 'workspaces_workspace']);
$routes->addRoute('GET', '/workspaces/{workspace}/hooks', ['_route' => 'workspaces_workspace_hooks']);
$routes->addRoute('GET', '/workspaces/{workspace}/hooks/{uid}', ['_route' => 'workspaces_workspace_hooks_uid']);
$routes->addRoute('GET', '/workspaces/{workspace}/members', ['_route' => 'workspaces_workspace_members']);
$routes->addRoute('GET', '/workspaces/{workspace}/members/{member}', ['_route' => 'workspaces_workspace_members_member']);
$routes->addRoute('GET', '/workspaces/{workspace}/permissions', ['_route' => 'workspaces_workspace_permissions']);
$routes->addRoute('GET', '/workspaces/{workspace}/permissions/repositories', ['_route' => 'workspaces_workspace_permissions_repositories']);
$routes->addRoute('GET', '/workspaces/{workspace}/permissions/repositories/{repo_slug}', ['_route' => 'workspaces_workspace_permissions_repositories_repo_slug']);
$routes->addRoute('GET', '/workspaces/{workspace}/pipelines-config/identity/oidc/.well-known/openid-configuration', ['_route' => 'workspaces_workspace_pipelines_config_identity_oidc_well_known_openid_configuration']);
$routes->addRoute('GET', '/workspaces/{workspace}/pipelines-config/identity/oidc/keys.json', ['_route' => 'workspaces_workspace_pipelines_config_identity_oidc_keys_json']);
$routes->addRoute('GET', '/workspaces/{workspace}/pipelines-config/variables', ['_route' => 'workspaces_workspace_pipelines_config_variables']);
$routes->addRoute('GET', '/workspaces/{workspace}/pipelines-config/variables/{variable_uuid}', ['_route' => 'workspaces_workspace_pipelines_config_variables_variable_uuid']);
$routes->addRoute('GET', '/workspaces/{workspace}/projects', ['_route' => 'workspaces_workspace_projects']);
$routes->addRoute('GET', '/workspaces/{workspace}/projects/{project_key}', ['_route' => 'workspaces_workspace_projects_project_key']);
$routes->addRoute('GET', '/workspaces/{workspace}/search/code', ['_route' => 'workspaces_workspace_search_code']);
