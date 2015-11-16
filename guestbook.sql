DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,      --自动增长的id
  `title` varchar(50) NOT NULL DEFAULT, --留言标题
  `content` text NOT NULL,                    --留言内容
  `name` varchar(50) NOT NULL,              --留言人
   --留言时间
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)                         --以id为主键
) ENGINE=InnoDB AUTO_INCREMENT=31  DEFAULT CHARSET=utf8;

