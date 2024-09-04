### Ngày 04/09/2024: Bổ sung bảng `nv4_users_field` by Hải Nguyễn
```
ALTER TABLE `nv4_users_field` CHANGE `field_type` `field_type` ENUM('number','date','textbox','textarea','editor','select','radio','checkbox','multiselect','file','matrix') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'textbox';
```