
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `deductions` (
  `deduction_id` int(5) NOT NULL,
  `MEDICAL` int(20) NOT NULL,
  `PF` int(20) NOT NULL,
  `INCOME_TAX` int(20) NOT NULL,
  `PROFESSION_TAX` int(20) NOT NULL,
  `LOANS` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `deductions` (`deduction_id`, `MEDICAL`, `PF`, `INCOME_TAX`, `PROFESSION_TAX`, `LOANS`) VALUES
(1, 1, 2, 3, 4, 5);


CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `emp_type` varchar(20) NOT NULL,
  `division` varchar(30) NOT NULL,
  `deduction` int(10) NOT NULL,
  `overtime` int(10) NOT NULL,
  `bonus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `employee` (`emp_id`, `lname`, `fname`, `gender`, `emp_type`, `division`, `deduction`, `overtime`, `bonus`) VALUES
(6, 'sp', 'anup', 'Male', 'Regular', 'MIS', 0, 2, 2),
(8, 'a', 'abhishek a', 'Male', 'Job Order', 'Human Resource', 5, 1, 1),
(9, 'cs', 'Karan', 'Female', 'Casual', 'Admin', 1, 24, 10000),
(10, 'b', 'mahesh', 'Male', 'Job Order', 'Human Resource', 1, 2500, 500);


CREATE TABLE `overtime` (
  `ot_id` int(10) NOT NULL,
  `rate` int(10) NOT NULL,
  `none` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `overtime` (`ot_id`, `rate`, `none`) VALUES
(1, 10, 0);



CREATE TABLE `salary` (
  `salary_id` int(10) NOT NULL,
  `salary_rate` int(10) NOT NULL,
  `none` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `salary` (`salary_id`, `salary_rate`, `none`) VALUES
(1, 1500, 0);

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'anup', 'anup'),
(2, 'admin', 'admin');

--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`deduction_id`);

ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

ALTER TABLE `overtime`
  ADD PRIMARY KEY (`ot_id`);


ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `deductions`
  MODIFY `deduction_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `employee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


ALTER TABLE `overtime`
  MODIFY `ot_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `salary`
  MODIFY `salary_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

  
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


