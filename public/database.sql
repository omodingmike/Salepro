INSERT INTO `general_settings` (`id`, `site_title`, `site_logo`, `is_rtl`, `created_at`, `updated_at`, `currency`, `staff_access`,
                                `date_format`, `developed_by`, `invoice_format`, `state`, `theme`, `currency_position`)
VALUES (1, 'SalePro', '20210530062516.png', 0, '2018-07-06 06:13:11', '2022-07-08 16:39:10', '1', 'own', 'd/m/Y', 'Omoding', 'standard', 1,
        'default.css', 'prefix');

INSERT INTO `currencies` (`id`, `name`, `code`, `exchange_rate`, `created_at`, `updated_at`)
VALUES (1, 'Uganda shillings', 'UGX', 1, '2022-06-26 10:22:08', '2022-06-26 10:22:31');

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `company_name`, `role_id`,
                     `biller_id`, `warehouse_id`, `is_active`, `is_deleted`)
VALUES (1, 'owner@mailinator.com', 'owner@mailinator.com', '$2y$10$2tWJsL0uC.3lwuMqWHdPC.Tsoq/ME0yA9aN7L231OxHn0/SW/SQpm', NULL,
        '2022-07-08 14:31:49', '2022-07-08 14:31:49', '0704034248', 'Shop', 2, NULL, NULL, 1, 0),
       (2, 'staff@mailinator.com', 'staff@mailinator.com', '$2y$10$32g8KauMzivEccJaYgh/7uptSOth1PWppmr6GsbzyU1DODfZ4tDUy', NULL,
        '2022-07-08 18:20:27', '2022-07-08 18:20:27', '34232432432', 'Shop', 4, 8, 1, 1, 0),
       (3, 'admin@mailinator.com', 'admin@mailinator.com', '$2y$10$nTksnf3D223lSfM84JKYBuWhTSd46t183K3Ha5XuJkXpbVuBA.M1i', NULL,
        '2022-07-08 18:21:33', '2022-07-08 18:21:33', '+1 (726) 755-8694', 'Shop', 1, NULL, NULL, 1, 0);

INSERT INTO `roles` (`id`, `name`, `description`, `is_active`, `created_at`, `updated_at`, `guard_name`)
VALUES (1, 'Admin', 'admin can access all data...', 1, '2018-06-01 23:46:44', '2018-06-02 23:13:05', 'web'),
       (2, 'Owner', 'Owner of shop...', 1, '2018-10-22 02:38:13', '2018-10-22 02:38:13', 'web'),
       (4, 'staff', 'staff has specific acess...', 1, '2018-06-02 00:05:27', '2018-06-02 00:05:27', 'web');

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`)
VALUES (4, 'products-edit', 'web', '2018-06-03 01:00:09', '2018-06-03 01:00:09'),
       (5, 'products-delete', 'web', '2018-06-03 22:54:22', '2018-06-03 22:54:22'),
       (6, 'products-add', 'web', '2018-06-04 00:34:14', '2018-06-04 00:34:14'),
       (7, 'products-index', 'web', '2018-06-04 03:34:27', '2018-06-04 03:34:27'),
       (8, 'purchases-index', 'web', '2018-06-04 08:03:19', '2018-06-04 08:03:19'),
       (9, 'purchases-add', 'web', '2018-06-04 08:12:25', '2018-06-04 08:12:25'),
       (10, 'purchases-edit', 'web', '2018-06-04 09:47:36', '2018-06-04 09:47:36'),
       (11, 'purchases-delete', 'web', '2018-06-04 09:47:36', '2018-06-04 09:47:36'),
       (12, 'sales-index', 'web', '2018-06-04 10:49:08', '2018-06-04 10:49:08'),
       (13, 'sales-add', 'web', '2018-06-04 10:49:52', '2018-06-04 10:49:52'),
       (14, 'sales-edit', 'web', '2018-06-04 10:49:52', '2018-06-04 10:49:52'),
       (15, 'sales-delete', 'web', '2018-06-04 10:49:53', '2018-06-04 10:49:53'),
       (16, 'quotes-index', 'web', '2018-06-04 22:05:10', '2018-06-04 22:05:10'),
       (17, 'quotes-add', 'web', '2018-06-04 22:05:10', '2018-06-04 22:05:10'),
       (18, 'quotes-edit', 'web', '2018-06-04 22:05:10', '2018-06-04 22:05:10'),
       (19, 'quotes-delete', 'web', '2018-06-04 22:05:10', '2018-06-04 22:05:10'),
       (20, 'transfers-index', 'web', '2018-06-04 22:30:03', '2018-06-04 22:30:03'),
       (21, 'transfers-add', 'web', '2018-06-04 22:30:03', '2018-06-04 22:30:03'),
       (22, 'transfers-edit', 'web', '2018-06-04 22:30:03', '2018-06-04 22:30:03'),
       (23, 'transfers-delete', 'web', '2018-06-04 22:30:03', '2018-06-04 22:30:03'),
       (24, 'returns-index', 'web', '2018-06-04 22:50:24', '2018-06-04 22:50:24'),
       (25, 'returns-add', 'web', '2018-06-04 22:50:24', '2018-06-04 22:50:24'),
       (26, 'returns-edit', 'web', '2018-06-04 22:50:25', '2018-06-04 22:50:25'),
       (27, 'returns-delete', 'web', '2018-06-04 22:50:25', '2018-06-04 22:50:25'),
       (28, 'customers-index', 'web', '2018-06-04 23:15:54', '2018-06-04 23:15:54'),
       (29, 'customers-add', 'web', '2018-06-04 23:15:55', '2018-06-04 23:15:55'),
       (30, 'customers-edit', 'web', '2018-06-04 23:15:55', '2018-06-04 23:15:55'),
       (31, 'customers-delete', 'web', '2018-06-04 23:15:55', '2018-06-04 23:15:55'),
       (32, 'suppliers-index', 'web', '2018-06-04 23:40:12', '2018-06-04 23:40:12'),
       (33, 'suppliers-add', 'web', '2018-06-04 23:40:12', '2018-06-04 23:40:12'),
       (34, 'suppliers-edit', 'web', '2018-06-04 23:40:12', '2018-06-04 23:40:12'),
       (35, 'suppliers-delete', 'web', '2018-06-04 23:40:12', '2018-06-04 23:40:12'),
       (36, 'product-report', 'web', '2018-06-24 23:05:33', '2018-06-24 23:05:33'),
       (37, 'purchase-report', 'web', '2018-06-24 23:24:56', '2018-06-24 23:24:56'),
       (38, 'sale-report', 'web', '2018-06-24 23:33:13', '2018-06-24 23:33:13'),
       (39, 'customer-report', 'web', '2018-06-24 23:36:51', '2018-06-24 23:36:51'),
       (40, 'due-report', 'web', '2018-06-24 23:39:52', '2018-06-24 23:39:52'),
       (41, 'users-index', 'web', '2018-06-25 00:00:10', '2018-06-25 00:00:10'),
       (42, 'users-add', 'web', '2018-06-25 00:00:10', '2018-06-25 00:00:10'),
       (43, 'users-edit', 'web', '2018-06-25 00:01:30', '2018-06-25 00:01:30'),
       (44, 'users-delete', 'web', '2018-06-25 00:01:30', '2018-06-25 00:01:30'),
       (45, 'profit-loss', 'web', '2018-07-14 21:50:05', '2018-07-14 21:50:05'),
       (46, 'best-seller', 'web', '2018-07-14 22:01:38', '2018-07-14 22:01:38'),
       (47, 'daily-sale', 'web', '2018-07-14 22:24:21', '2018-07-14 22:24:21'),
       (48, 'monthly-sale', 'web', '2018-07-14 22:30:41', '2018-07-14 22:30:41'),
       (49, 'daily-purchase', 'web', '2018-07-14 22:36:46', '2018-07-14 22:36:46'),
       (50, 'monthly-purchase', 'web', '2018-07-14 22:48:17', '2018-07-14 22:48:17'),
       (51, 'payment-report', 'web', '2018-07-14 23:10:41', '2018-07-14 23:10:41'),
       (52, 'warehouse-stock-report', 'web', '2018-07-14 23:16:55', '2018-07-14 23:16:55'),
       (53, 'product-qty-alert', 'web', '2018-07-14 23:33:21', '2018-07-14 23:33:21'),
       (54, 'supplier-report', 'web', '2018-07-30 03:00:01', '2018-07-30 03:00:01'),
       (55, 'expenses-index', 'web', '2018-09-05 01:07:10', '2018-09-05 01:07:10'),
       (56, 'expenses-add', 'web', '2018-09-05 01:07:10', '2018-09-05 01:07:10'),
       (57, 'expenses-edit', 'web', '2018-09-05 01:07:10', '2018-09-05 01:07:10'),
       (58, 'expenses-delete', 'web', '2018-09-05 01:07:11', '2018-09-05 01:07:11'),
       (59, 'general_setting', 'web', '2018-10-19 23:10:04', '2018-10-19 23:10:04'),
       (60, 'mail_setting', 'web', '2018-10-19 23:10:04', '2018-10-19 23:10:04'),
       (61, 'pos_setting', 'web', '2018-10-19 23:10:04', '2018-10-19 23:10:04'),
       (62, 'hrm_setting', 'web', '2019-01-02 10:30:23', '2019-01-02 10:30:23'),
       (63, 'purchase-return-index', 'web', '2019-01-02 21:45:14', '2019-01-02 21:45:14'),
       (64, 'purchase-return-add', 'web', '2019-01-02 21:45:14', '2019-01-02 21:45:14'),
       (65, 'purchase-return-edit', 'web', '2019-01-02 21:45:14', '2019-01-02 21:45:14'),
       (66, 'purchase-return-delete', 'web', '2019-01-02 21:45:14', '2019-01-02 21:45:14'),
       (67, 'account-index', 'web', '2019-01-02 22:06:13', '2019-01-02 22:06:13'),
       (68, 'balance-sheet', 'web', '2019-01-02 22:06:14', '2019-01-02 22:06:14'),
       (69, 'account-statement', 'web', '2019-01-02 22:06:14', '2019-01-02 22:06:14'),
       (70, 'department', 'web', '2019-01-02 22:30:01', '2019-01-02 22:30:01'),
       (71, 'attendance', 'web', '2019-01-02 22:30:01', '2019-01-02 22:30:01'),
       (72, 'payroll', 'web', '2019-01-02 22:30:01', '2019-01-02 22:30:01'),
       (73, 'employees-index', 'web', '2019-01-02 22:52:19', '2019-01-02 22:52:19'),
       (74, 'employees-add', 'web', '2019-01-02 22:52:19', '2019-01-02 22:52:19'),
       (75, 'employees-edit', 'web', '2019-01-02 22:52:19', '2019-01-02 22:52:19'),
       (76, 'employees-delete', 'web', '2019-01-02 22:52:19', '2019-01-02 22:52:19'),
       (77, 'user-report', 'web', '2019-01-16 06:48:18', '2019-01-16 06:48:18'),
       (78, 'stock_count', 'web', '2019-02-17 10:32:01', '2019-02-17 10:32:01'),
       (79, 'adjustment', 'web', '2019-02-17 10:32:02', '2019-02-17 10:32:02'),
       (80, 'sms_setting', 'web', '2019-02-22 05:18:03', '2019-02-22 05:18:03'),
       (81, 'create_sms', 'web', '2019-02-22 05:18:03', '2019-02-22 05:18:03'),
       (82, 'print_barcode', 'web', '2019-03-07 05:02:19', '2019-03-07 05:02:19'),
       (83, 'empty_database', 'web', '2019-03-07 05:02:19', '2019-03-07 05:02:19'),
       (84, 'customer_group', 'web', '2019-03-07 05:37:15', '2019-03-07 05:37:15'),
       (85, 'unit', 'web', '2019-03-07 05:37:15', '2019-03-07 05:37:15'),
       (86, 'tax', 'web', '2019-03-07 05:37:15', '2019-03-07 05:37:15'),
       (87, 'gift_card', 'web', '2019-03-07 06:29:38', '2019-03-07 06:29:38'),
       (88, 'coupon', 'web', '2019-03-07 06:29:38', '2019-03-07 06:29:38'),
       (89, 'holiday', 'web', '2019-10-19 08:57:15', '2019-10-19 08:57:15'),
       (90, 'warehouse-report', 'web', '2019-10-22 06:00:23', '2019-10-22 06:00:23'),
       (91, 'warehouse', 'web', '2020-02-26 06:47:32', '2020-02-26 06:47:32'),
       (92, 'brand', 'web', '2020-02-26 06:59:59', '2020-02-26 06:59:59'),
       (93, 'billers-index', 'web', '2020-02-26 07:11:15', '2020-02-26 07:11:15'),
       (94, 'billers-add', 'web', '2020-02-26 07:11:15', '2020-02-26 07:11:15'),
       (95, 'billers-edit', 'web', '2020-02-26 07:11:15', '2020-02-26 07:11:15'),
       (96, 'billers-delete', 'web', '2020-02-26 07:11:15', '2020-02-26 07:11:15'),
       (97, 'money-transfer', 'web', '2020-03-02 05:41:48', '2020-03-02 05:41:48'),
       (98, 'category', 'web', '2020-07-13 12:13:16', '2020-07-13 12:13:16'),
       (99, 'delivery', 'web', '2020-07-13 12:13:16', '2020-07-13 12:13:16'),
       (100, 'send_notification', 'web', '2020-10-31 06:21:31', '2020-10-31 06:21:31'),
       (101, 'today_sale', 'web', '2020-10-31 06:57:04', '2020-10-31 06:57:04'),
       (102, 'today_profit', 'web', '2020-10-31 06:57:04', '2020-10-31 06:57:04'),
       (103, 'currency', 'web', '2020-11-09 00:23:11', '2020-11-09 00:23:11'),
       (104, 'backup_database', 'web', '2020-11-15 00:16:55', '2020-11-15 00:16:55'),
       (105, 'reward_point_setting', 'web', '2021-06-27 04:34:42', '2021-06-27 04:34:42');

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`)
VALUES (4, 1),
       (4, 2),
       (4, 4),
       (5, 1),
       (5, 2),
       (5, 4),
       (6, 1),
       (6, 2),
       (6, 4),
       (7, 1),
       (7, 2),
       (7, 4),
       (8, 1),
       (8, 2),
       (8, 4),
       (9, 1),
       (9, 2),
       (9, 4),
       (10, 1),
       (10, 2),
       (10, 4),
       (11, 1),
       (11, 2),
       (11, 4),
       (12, 1),
       (12, 2),
       (12, 4),
       (13, 1),
       (13, 2),
       (13, 4),
       (14, 1),
       (14, 2),
       (14, 4),
       (15, 1),
       (15, 2),
       (15, 4),
       (16, 1),
       (16, 2),
       (16, 4),
       (17, 1),
       (17, 2),
       (17, 4),
       (18, 1),
       (18, 2),
       (18, 4),
       (19, 1),
       (19, 2),
       (19, 4),
       (20, 1),
       (20, 2),
       (20, 4),
       (21, 1),
       (21, 2),
       (21, 4),
       (22, 1),
       (22, 2),
       (22, 4),
       (23, 1),
       (23, 2),
       (23, 4),
       (24, 1),
       (24, 2),
       (24, 4),
       (25, 1),
       (25, 2),
       (25, 4),
       (26, 1),
       (26, 2),
       (26, 4),
       (27, 1),
       (27, 2),
       (27, 4),
       (28, 1),
       (28, 2),
       (28, 4),
       (29, 1),
       (29, 2),
       (29, 4),
       (30, 1),
       (30, 2),
       (30, 4),
       (31, 1),
       (31, 2),
       (31, 4),
       (32, 1),
       (32, 2),
       (32, 4),
       (33, 1),
       (33, 2),
       (33, 4),
       (34, 1),
       (34, 2),
       (34, 4),
       (35, 1),
       (35, 2),
       (35, 4),
       (36, 1),
       (36, 2),
       (37, 1),
       (37, 2),
       (38, 1),
       (38, 2),
       (39, 1),
       (39, 2),
       (40, 1),
       (40, 2),
       (41, 1),
       (41, 2),
       (42, 1),
       (42, 2),
       (43, 1),
       (43, 2),
       (44, 1),
       (44, 2),
       (45, 1),
       (45, 2),
       (46, 1),
       (46, 2),
       (47, 1),
       (47, 2),
       (48, 1),
       (48, 2),
       (49, 1),
       (49, 2),
       (50, 1),
       (50, 2),
       (51, 1),
       (51, 2),
       (52, 1),
       (52, 2),
       (53, 1),
       (53, 2),
       (54, 1),
       (54, 2),
       (55, 1),
       (55, 2),
       (55, 4),
       (56, 1),
       (56, 2),
       (56, 4),
       (57, 1),
       (57, 2),
       (57, 4),
       (58, 1),
       (58, 2),
       (58, 4),
       (59, 1),
       (60, 1),
       (61, 1),
       (61, 2),
       (62, 1),
       (63, 1),
       (63, 2),
       (63, 4),
       (64, 1),
       (64, 2),
       (64, 4),
       (65, 1),
       (65, 2),
       (65, 4),
       (66, 1),
       (66, 2),
       (66, 4),
       (67, 1),
       (67, 2),
       (68, 1),
       (68, 2),
       (69, 1),
       (69, 2),
       (70, 1),
       (70, 2),
       (71, 1),
       (71, 2),
       (72, 1),
       (72, 2),
       (73, 1),
       (73, 2),
       (74, 1),
       (74, 2),
       (75, 1),
       (75, 2),
       (76, 1),
       (76, 2),
       (77, 1),
       (77, 2),
       (78, 1),
       (78, 2),
       (78, 4),
       (79, 1),
       (79, 2),
       (80, 1),
       (81, 1),
       (82, 1),
       (82, 2),
       (83, 1),
       (83, 2),
       (84, 1),
       (85, 1),
       (85, 2),
       (85, 4),
       (86, 1),
       (86, 2),
       (87, 1),
       (87, 2),
       (88, 1),
       (88, 2),
       (89, 1),
       (89, 2),
       (90, 1),
       (90, 2),
       (91, 1),
       (91, 2),
       (92, 1),
       (92, 2),
       (92, 4),
       (93, 1),
       (93, 2),
       (93, 4),
       (94, 1),
       (94, 2),
       (94, 4),
       (95, 1),
       (95, 2),
       (95, 4),
       (96, 1),
       (96, 2),
       (96, 4),
       (97, 1),
       (97, 2),
       (98, 1),
       (98, 2),
       (98, 4),
       (99, 1),
       (99, 2),
       (100, 1),
       (101, 1),
       (101, 2),
       (102, 1),
       (102, 2),
       (103, 1),
       (103, 2),
       (104, 1),
       (105, 1);

INSERT INTO `customer_groups` (`id`, `name`, `percentage`, `is_active`, `created_at`, `updated_at`)
VALUES (1, 'general', '0', 1, '2018-05-12 08:09:36', '2019-03-02 06:01:35');

INSERT INTO `billers` (`id`, `name`, `image`, `company_name`, `vat_number`, `email`, `phone_number`, `address`, `city`, `state`,
                       `postal_code`, `country`, `is_active`, `created_at`, `updated_at`)
VALUES (1, 'Biller', 'x.png', 'x', '', 'x@x.com', 'x', 'x', 'x', '', '', '', 1, '2019-03-18 11:02:42', '2019-12-21 11:01:24');



INSERT INTO `accounts` (`id`, `account_no`, `name`, `initial_balance`, `total_balance`, `note`, `is_default`, `is_active`, `created_at`, `updated_at`) VALUES
    (1, 'SA0218IBYZVZJSEC8536V4XC', 'Account', 50000000, 50000000, 'Minus adipisicing se', 1, 1, '2022-07-16 19:27:00', '2022-07-16 19:27:00');

INSERT INTO pos_setting VALUES("1","11","2","1","4","0","pk_test_ITN7KOYiIsHSCQ0UMRcgaYUB","sk_test_TtQQaawhEYRwa3mU9CzttrEy","2018-09-02 09:17:04","2020-04-17 19:59:54");
