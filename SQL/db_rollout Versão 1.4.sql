-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jul-2022 às 02:25
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_rollout`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_alterar_imagem_perfil` (IN `pid_usuario` INT(11), IN `pfoto` VARCHAR(64))  BEGIN
 
    UPDATE tb_usuarios
    SET
        foto = pfoto
      
	WHERE id_usuario = pid_usuario;
    
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_altera_analista_rollout` (IN `pid_rollout` INT(11), IN `pid_usuario` INT(11))  BEGIN
 
    UPDATE tb_rollouts
    SET
        id_usuario = pid_usuario
        
        WHERE id_rollout = pid_rollout;
        
        
          SELECT * FROM tb_rollouts WHERE id_rollout = pid_rollout;
        
        
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_altera_analista_termo` (IN `pid_termos` INT(11), IN `pid_usuario` INT(11))  BEGIN
 
    UPDATE tb_termos
    SET
        id_usuario = pid_usuario
        
        WHERE id_termos = pid_termos;
        
        
          SELECT * FROM tb_termos WHERE id_termos = pid_termos;
        
        
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_arquivo_documento_add` (IN `pid_documento` INT(11), IN `pid_usuario` INT(11), IN `parquivo_documento` VARCHAR(64))  NO SQL
BEGIN

INSERT INTO tb_arquivos_documentos (id_documento,id_usuario,arquivo_documento)
    VALUES(pid_documento,pid_usuario,parquivo_documento);
   

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_arquivo_rollout_add` (IN `pid_rollout` INT(11), IN `pid_usuario` INT(11), IN `parquivo_rollout` VARCHAR(64))  NO SQL
BEGIN

INSERT INTO tb_arquivos_rollouts (id_rollout,id_usuario,arquivo_rollout)
    VALUES(pid_rollout,pid_usuario,parquivo_rollout);
   

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_arquivo_termo_add` (IN `pid_termos` INT(11), IN `pid_usuario` INT(11), IN `parquivo_termo` VARCHAR(64))  NO SQL
BEGIN

INSERT INTO tb_arquivos_termos (id_termos,id_usuario,arquivo_termo)
    VALUES(pid_termos,pid_usuario,parquivo_termo);
   

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_cadastro_usuario` (IN `pnome_user` VARCHAR(64), IN `plocalidade` TEXT, IN `plogin` VARCHAR(64), IN `psenha` VARCHAR(256), IN `pemail` VARCHAR(128), IN `pinadmin` TINYINT(4), IN `pempresa` VARCHAR(64), IN `pcargo` VARCHAR(64), IN `pfoto` INT(64))  BEGIN
   
    INSERT INTO tb_usuarios (nome_user,localidade,login,senha,email,inadmin,empresa,cargo,foto)
    
    VALUES(pnome_user,plocalidade,plogin,psenha,pemail,pinadmin,pempresa,pcargo,pfoto);
    
    
  SELECT * FROM tb_usuarios  WHERE id_usuario = LAST_INSERT_ID();
    
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_editar_senha` (IN `pid_usuario` INT(11), IN `psenha` VARCHAR(256))  BEGIN
 
    UPDATE tb_usuarios
    SET
        senha = psenha
        
        WHERE id_usuario = pid_usuario;
        
        
          SELECT * FROM tb_usuarios WHERE id_usuario = pid_usuario;
        
        
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_editar_situacao` (IN `pid_rollout` INT(11), IN `psituacao` TEXT)  BEGIN
 
    UPDATE tb_rollouts
    SET
        situacao = psituacao
          
        WHERE id_rollout = pid_rollout;
        
      SELECT * FROM tb_rollouts WHERE id_rollout = pid_rollout;

      END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_editar_situacaoT` (IN `pid_termos` INT(11), IN `psituacao_t` TEXT)  BEGIN
 
    UPDATE tb_termos
    SET
        situacao_t = psituacao_t
          
        WHERE id_termos = pid_termos;
        
      SELECT * FROM tb_termos WHERE id_termos = pid_termos;

      END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_editar_usuario` (IN `pid_usuario` INT(11), IN `pnome_user` VARCHAR(64), IN `plocalidade` TEXT, IN `pempresa` VARCHAR(64), IN `pinadmin` TINYINT(4), IN `pcargo` VARCHAR(64))  BEGIN
 
    UPDATE tb_usuarios
    SET
        nome_user = pnome_user,
        localidade = plocalidade,
         empresa = pempresa,
        inadmin = pinadmin,
        cargo = pcargo
        
        WHERE id_usuario = pid_usuario;
        
        
          SELECT * FROM tb_usuarios WHERE id_usuario = pid_usuario;
        
      
    
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_edita_documento` (IN `pid_documento` INT(11), IN `pnome_documento` TEXT, IN `dt_documento` TEXT)  NO SQL
BEGIN
   
     UPDATE tb_documentos
    SET
    id_documento = pid_documento,
    nome_documento = pnome_documento,
	dt_documento = dt_documento
   
    
     WHERE id_documento = pid_documento;
    
    
   
    
  
  SELECT * FROM tb_documentos  WHERE id_documento = pid_documento;
    
    


    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_edita_rollout` (IN `pid_rollout` INT(11), IN `pn_chamado` TEXT, IN `psituacao` TEXT, IN `pnome` TEXT, IN `pdiretoria` TEXT, IN `pgerencia` TEXT, IN `pgerencia_executiva` TEXT, IN `pandar` TEXT, IN `pmq_marca_atual` TEXT, IN `pmq_modelo_atual` TEXT, IN `pmq_patrimonio_atual` TEXT, IN `pmq_hostname_atual` TEXT, IN `pmq_nserie_atual` TEXT, IN `pmq_rede_atual` TEXT, IN `pmn_marca_atual1` TEXT, IN `pmn_modelo_atual1` TEXT, IN `pmn_patrimonio_atual1` TEXT, IN `pmn_nserie_atual1` TEXT, IN `pmn_marca_atual2` TEXT, IN `pmn_modelo_atual2` TEXT, IN `pmn_patrimonio_atual2` TEXT, IN `pmn_nserie_atual2` TEXT, IN `pmn_marca_atual3` TEXT, IN `pmn_modelo_atual3` TEXT, IN `pmn_patrimonio_atual3` TEXT, IN `pmn_nserie_atual3` TEXT, IN `pmq_marca_novo` TEXT, IN `pmq_modelo_novo` TEXT, IN `pmq_patrimonio_novo` TEXT, IN `pmq_hostname_novo` TEXT, IN `pmq_nserie_novo` TEXT, IN `pmq_rede_novo` TEXT, IN `pmn_marca_novo1` TEXT, IN `pmn_modelo_novo1` TEXT, IN `pmn_patrimonio_novo1` TEXT, IN `pmn_nserie_novo1` TEXT, IN `pmn_marca_novo2` TEXT, IN `pmn_modelo_novo2` TEXT, IN `pmn_patrimonio_novo2` TEXT, IN `pmn_nserie_novo2` TEXT, IN `pmn_marca_novo3` TEXT, IN `pmn_modelo_novo3` TEXT, IN `pmn_patrimonio_novo3` TEXT, IN `pmn_nserie_novo3` TEXT, IN `pmq_marca_qrt` TEXT, IN `pmq_modelo_qrt` TEXT, IN `pmq_patrimonio_qrt` TEXT, IN `pmq_hostname_qrt` TEXT, IN `pmq_nserie_qrt` TEXT, IN `pmq_rede_qrt` TEXT, IN `psoftware1` TEXT, IN `psoftware2` TEXT, IN `psoftware3` TEXT, IN `psoftware4` TEXT, IN `psoftware5` TEXT, IN `psoftware6` TEXT, IN `psoftware7` TEXT, IN `psoftware8` TEXT, IN `psoftware9` TEXT, IN `psoftware10` TEXT, IN `psof1` TEXT, IN `psof2` TEXT, IN `psof3` TEXT, IN `psof4` TEXT, IN `psof5` TEXT, IN `psof6` TEXT, IN `psof7` TEXT, IN `psof8` TEXT, IN `psof9` TEXT, IN `psof10` TEXT, IN `pbkp` TEXT, IN `padmin` TEXT, IN `pac_devolvido` TEXT, IN `pac_mantido` TEXT, IN `pdt_data_rollout` DATE)  NO SQL
BEGIN
   
     UPDATE tb_rollouts
    SET
    id_rollout = pid_rollout,
    n_chamado = pn_chamado,
    situacao = psituacao,
    nome = pnome,
    diretoria = pdiretoria,
    gerencia = pgerencia,
    gerencia_executiva = pgerencia_executiva,
    andar = pandar,
   mq_marca_atual = pmq_marca_atual,
   mq_modelo_atual = pmq_modelo_atual,
   mq_patrimonio_atual = pmq_patrimonio_atual,
   mq_hostname_atual = pmq_hostname_atual,
   mq_nserie_atual = pmq_nserie_atual,
   mq_rede_atual = pmq_rede_atual,
     mn_marca_atual1 = pmn_marca_atual1,
     mn_modelo_atual1 = pmn_modelo_atual1,
     mn_patrimonio_atual1 = pmn_patrimonio_atual1,
     mn_nserie_atual1 = pmn_nserie_atual1,
    mn_marca_atual2 = pmn_marca_atual2,
    mn_modelo_atual2 = pmn_modelo_atual2,
    mn_patrimonio_atual2 = pmn_patrimonio_atual2,
    mn_nserie_atual2 = pmn_nserie_atual2,
    mn_marca_atual3 = pmn_marca_atual3,
    mn_modelo_atual3 = pmn_modelo_atual3,
    mn_patrimonio_atual3 = pmn_patrimonio_atual3,
    mn_nserie_atual3 = pmn_nserie_atual3,
    mq_marca_novo = pmq_marca_novo,
    mq_modelo_novo = pmq_modelo_novo,
    mq_patrimonio_novo = pmq_patrimonio_novo,
    mq_hostname_novo = pmq_hostname_novo,
    mq_nserie_novo = pmq_nserie_novo,
    mq_rede_novo = pmq_rede_novo,
    mn_marca_novo1 = pmn_marca_novo1,
    mn_modelo_novo1 = pmn_modelo_novo1,
    mn_patrimonio_novo1 = pmn_patrimonio_novo1,
    mn_nserie_novo1 = pmn_nserie_novo1,
    mn_marca_novo2 =pmn_marca_novo2 ,
    mn_modelo_novo2 = pmn_modelo_novo2,
    mn_patrimonio_novo2 = pmn_patrimonio_novo2,
    mn_nserie_novo2 = pmn_nserie_novo2,
    mn_marca_novo3 = pmn_marca_novo3,
    mn_modelo_novo3 = pmn_modelo_novo3,
    mn_patrimonio_novo3 = pmn_patrimonio_novo3,
    mn_nserie_novo3 = pmn_nserie_novo3,
    mq_marca_qrt = pmq_marca_qrt,
    mq_modelo_qrt = pmq_modelo_qrt,
    mq_patrimonio_qrt = pmq_patrimonio_qrt,
    mq_hostname_qrt = pmq_hostname_qrt,
    mq_nserie_qrt = pmq_nserie_qrt,
    mq_rede_qrt = pmq_rede_qrt,
 software1 = psoftware1,
 software2 = psoftware2,
 software3 = psoftware3,
 software4 = psoftware4,
 software5 = psoftware5,
 software6 = psoftware6,
 software7 = psoftware7,
 software8 = psoftware8,
 software9 = psoftware9,
 software10 = psoftware10,
     sof1 = psof1,
     sof2 = psof2,
     sof3 = psof3,
     sof4 = psof4,
     sof5 = psof5,
     sof6 = psof6,
     sof7 = psof7,
     sof8 = psof8,
     sof9 = psof9,
     sof10 = psof10,
     bkp = pbkp,
     admin = padmin,
    ac_devolvido = pac_devolvido,
    ac_mantido = pac_mantido,
    dt_data_rollout = pdt_data_rollout
	
  
    
     WHERE id_rollout = pid_rollout;
    
    
   
    
  
  SELECT * FROM tb_rollouts  WHERE id_rollout = pid_rollout;
    
    


    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_edita_termo` (IN `pid_termos` INT(11), IN `ptermo` TEXT, IN `pn_chamadoT` TEXT, IN `psituacao_t` TEXT, IN `pnome_t` TEXT, IN `pdiretoria_t` TEXT, IN `pgerencia_t` TEXT, IN `pgerencia_exeT` TEXT, IN `pequipamentos_t` TEXT, IN `pacessorios_t` TEXT, IN `pobservacao_t` TEXT, IN `pfinalidade` TEXT, IN `pdt_data` TEXT)  NO SQL
BEGIN
   
     UPDATE tb_termos
    SET
    id_termos = pid_termos,
     termo = ptermo,
	n_chamadoT = pn_chamadoT,
    situacao_t = psituacao_t,
    nome_t = pnome_t,
    diretoria_t = pdiretoria_t,
    gerencia_t = pgerencia_t,
    gerencia_exeT = pgerencia_exeT,
    equipamentos_t = pequipamentos_t,
    acessorios_t = pacessorios_t,
    observacao_t = pobservacao_t,
    finalidade = pfinalidade,
    dt_data = pdt_data
    
     WHERE id_termos = pid_termos;
    
    
   
    
  
  SELECT * FROM tb_termos  WHERE id_termos = pid_termos;
    
    


    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registro_documentos` (IN `pid_usuario` INT(11), IN `pnome_documento` TEXT, IN `pdt_documento` TEXT, IN `pcidade` TEXT)  NO SQL
BEGIN
   
    INSERT INTO tb_documentos
    (id_usuario,nome_documento,dt_documento,cidade
    
    )
    
    VALUES(pid_usuario,pnome_documento,pdt_documento,pcidade  
    
     );
    
  
  SELECT * FROM tb_documentos  WHERE id_documento = LAST_INSERT_ID();
    
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registro_rollout` (IN `pid_usuario` INT(11), IN `pn_chamado` INT, IN `psituacao` TEXT, IN `pnome` TEXT, IN `pdiretoria` TEXT, IN `pgerencia` TEXT, IN `pgerencia_executiva` TEXT, IN `pandar` TEXT, IN `pmq_marca_atual` TEXT, IN `pmq_modelo_atual` TEXT, IN `pmq_patrimonio_atual` TEXT, IN `pmq_hostname_atual` TEXT, IN `pmq_nserie_atual` TEXT, IN `pmq_rede_atual` TEXT, IN `pmn_marca_atual1` TEXT, IN `pmn_modelo_atual1` TEXT, IN `pmn_patrimonio_atual1` TEXT, IN `pmn_nserie_atual1` TEXT, IN `pmn_marca_atual2` TEXT, IN `pmn_modelo_atual2` TEXT, IN `pmn_patrimonio_atual2` TEXT, IN `pmn_nserie_atual2` TEXT, IN `pmn_marca_atual3` TEXT, IN `pmn_modelo_atual3` TEXT, IN `pmn_patrimonio_atual3` TEXT, IN `pmn_nserie_atual3` TEXT, IN `pmq_marca_novo` TEXT, IN `pmq_modelo_novo` TEXT, IN `pmq_patrimonio_novo` TEXT, IN `pmq_hostname_novo` TEXT, IN `pmq_nserie_novo` TEXT, IN `pmq_rede_novo` TEXT, IN `pmn_marca_novo1` TEXT, IN `pmn_modelo_novo1` TEXT, IN `pmn_patrimonio_novo1` TEXT, IN `pmn_nserie_novo1` TEXT, IN `pmn_marca_novo2` TEXT, IN `pmn_modelo_novo2` TEXT, IN `pmn_patrimonio_novo2` TEXT, IN `pmn_nserie_novo2` TEXT, IN `pmn_marca_novo3` TEXT, IN `pmn_modelo_novo3` TEXT, IN `pmn_patrimonio_novo3` TEXT, IN `pmn_nserie_novo3` TEXT, IN `pmq_marca_qrt` TEXT, IN `pmq_modelo_qrt` TEXT, IN `pmq_patrimonio_qrt` TEXT, IN `pmq_hostname_qrt` TEXT, IN `pmq_nserie_qrt` TEXT, IN `pmq_rede_qrt` TEXT, IN `psoftware1` TEXT, IN `psoftware2` TEXT, IN `psoftware3` TEXT, IN `psoftware4` TEXT, IN `psoftware5` TEXT, IN `psoftware6` TEXT, IN `psoftware7` TEXT, IN `psoftware8` TEXT, IN `psoftware9` TEXT, IN `psoftware10` TEXT, IN `psof1` TEXT, IN `psof2` TEXT, IN `psof3` TEXT, IN `psof4` TEXT, IN `psof5` TEXT, IN `psof6` TEXT, IN `psof7` TEXT, IN `psof8` TEXT, IN `psof9` TEXT, IN `psof10` TEXT, IN `pbkp` TEXT, IN `padmin` TEXT, IN `pac_devolvido` TEXT, IN `pac_mantido` TEXT, IN `pcidade` TEXT, IN `pdt_data_rollout` DATE)  NO SQL
BEGIN
   
    INSERT INTO tb_rollouts
    (id_usuario,n_chamado,situacao,nome,diretoria,gerencia,gerencia_executiva,andar,
   mq_marca_atual,mq_modelo_atual,mq_patrimonio_atual,mq_hostname_atual,mq_nserie_atual,mq_rede_atual,
     mn_marca_atual1,mn_modelo_atual1,mn_patrimonio_atual1,mn_nserie_atual1,
    mn_marca_atual2,mn_modelo_atual2,mn_patrimonio_atual2,mn_nserie_atual2,
    mn_marca_atual3,mn_modelo_atual3,mn_patrimonio_atual3,mn_nserie_atual3,
    mq_marca_novo,mq_modelo_novo,mq_patrimonio_novo,mq_hostname_novo,mq_nserie_novo,mq_rede_novo,
    mn_marca_novo1,mn_modelo_novo1,mn_patrimonio_novo1,mn_nserie_novo1,
    mn_marca_novo2,mn_modelo_novo2,mn_patrimonio_novo2,mn_nserie_novo2,
    mn_marca_novo3,mn_modelo_novo3,mn_patrimonio_novo3,mn_nserie_novo3,
    mq_marca_qrt,mq_modelo_qrt,mq_patrimonio_qrt,mq_hostname_qrt,mq_nserie_qrt,mq_rede_qrt,
 software1,software2,software3,software4,software5,software6,software7,software8,software9,software10,
     sof1,sof2,sof3,sof4,sof5,sof6,sof7,sof8,sof9,sof10,
     bkp,admin,
    ac_devolvido,ac_mantido,
     cidade,
     dt_data_rollout
     
  
    
    
    )
    
    VALUES(pid_usuario,pn_chamado,psituacao,pnome,pdiretoria,pgerencia,pgerencia_executiva,pandar,
  pmq_marca_atual,pmq_modelo_atual,pmq_patrimonio_atual,pmq_hostname_atual,pmq_nserie_atual,pmq_rede_atual,
    pmn_marca_atual1,pmn_modelo_atual1,pmn_patrimonio_atual1,pmn_nserie_atual1,
    pmn_marca_atual2,pmn_modelo_atual2,pmn_patrimonio_atual2,pmn_nserie_atual2,
    pmn_marca_atual3,pmn_modelo_atual3,pmn_patrimonio_atual3,pmn_nserie_atual3,
    pmq_marca_novo,pmq_modelo_novo,pmq_patrimonio_novo,pmq_hostname_novo,pmq_nserie_novo,pmq_rede_novo,
    pmn_marca_novo1,pmn_modelo_novo1,pmn_patrimonio_novo1,pmn_nserie_novo1,
    pmn_marca_novo2,pmn_modelo_novo2,pmn_patrimonio_novo2,pmn_nserie_novo2,
    pmn_marca_novo3,pmn_modelo_novo3,pmn_patrimonio_novo3,pmn_nserie_novo3,
    pmq_marca_qrt,pmq_modelo_qrt,pmq_patrimonio_qrt,pmq_hostname_qrt,pmq_nserie_qrt,pmq_rede_qrt,      psoftware1,psoftware2,psoftware3,psoftware4,psoftware5,psoftware6,psoftware7,psoftware8,psoftware9,psoftware10,
     psof1,psof2,psof3,psof4,psof5,psof6,psof7,psof8,psof9,psof10,
     pbkp,padmin,
     pac_devolvido, pac_mantido,
     pcidade,
     pdt_data_rollout
  
   
  
    
           
    
     );
    
  
  SELECT * FROM tb_rollouts  WHERE id_rollout = LAST_INSERT_ID();
    
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registro_termos` (IN `pid_usuario` INT(11), IN `ptermo` TEXT, IN `pn_chamadoT` TEXT, IN `psituacao_t` TEXT, IN `pnome_t` TEXT, IN `pdiretoria_t` TEXT, IN `pgerencia_t` TEXT, IN `pgerencia_exeT` TEXT, IN `pequipamento_1` TEXT, IN `pqtd_1` INT(50), IN `pacessorios_t` TEXT, IN `pobservacao_t` TEXT, IN `pfinalidade` TEXT, IN `pdt_data` TEXT, IN `pcidade` TEXT)  NO SQL
BEGIN
   
    INSERT INTO tb_termos
    (id_usuario,termo,n_chamadoT,situacao_t,nome_t,
        diretoria_t,gerencia_t,gerencia_exeT,
        equipamento_1,qtd_1,acessorios_t,observacao_t,
        finalidade,dt_data,cidade
  
    
    
    )
    
    VALUES(pid_usuario,ptermo,pn_chamadoT,psituacao_t,pnome_t,
        pdiretoria_t,pgerencia_t,pgerencia_exeT,
        pequipamento_1,pqtd_1,pacessorios_t,pobservacao_t,
        pfinalidade,pdt_data,pcidade   
    
     );
    
  
  SELECT * FROM tb_termos  WHERE id_termos = LAST_INSERT_ID();
    
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_userspasswordsrecoveries_create` (`pid_usuario` INT, `pdesip` VARCHAR(45))  BEGIN
	
	INSERT INTO tb_userspasswordsrecoveries (id_usuario, desip)
    VALUES(pid_usuario, pdesip);
    
    SELECT * FROM tb_userspasswordsrecoveries WHERE idrecovery = LAST_INSERT_ID();
    
    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_arquivos_documentos`
--

CREATE TABLE `tb_arquivos_documentos` (
  `id_arquivoD` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_documento` int(11) NOT NULL,
  `arquivo_documento` text DEFAULT NULL,
  `data_registro` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_arquivos_rollouts`
--

CREATE TABLE `tb_arquivos_rollouts` (
  `id_arquivoR` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_rollout` int(11) NOT NULL,
  `arquivo_rollout` varchar(64) NOT NULL,
  `data_registro` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_arquivos_termos`
--

CREATE TABLE `tb_arquivos_termos` (
  `id_arquivoT` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_termos` int(11) NOT NULL,
  `arquivo_termo` varchar(64) NOT NULL,
  `data_registro` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_documentos`
--

CREATE TABLE `tb_documentos` (
  `id_documento` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome_documento` text CHARACTER SET utf8 NOT NULL,
  `dt_documento` date DEFAULT NULL,
  `cidade` text NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_rollouts`
--

CREATE TABLE `tb_rollouts` (
  `id_rollout` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `n_chamado` text DEFAULT NULL,
  `situacao` text DEFAULT NULL,
  `nome` text DEFAULT NULL,
  `diretoria` text DEFAULT NULL,
  `gerencia` text DEFAULT NULL,
  `gerencia_executiva` text DEFAULT NULL,
  `andar` text DEFAULT NULL,
  `mq_marca_atual` text DEFAULT NULL,
  `mq_modelo_atual` text DEFAULT NULL,
  `mq_patrimonio_atual` text DEFAULT NULL,
  `mq_hostname_atual` text DEFAULT NULL,
  `mq_nserie_atual` text DEFAULT NULL,
  `mq_rede_atual` text DEFAULT NULL,
  `mn_marca_atual1` text DEFAULT NULL,
  `mn_modelo_atual1` text DEFAULT NULL,
  `mn_patrimonio_atual1` text DEFAULT NULL,
  `mn_nserie_atual1` text DEFAULT NULL,
  `mn_marca_atual2` text DEFAULT NULL,
  `mn_modelo_atual2` text DEFAULT NULL,
  `mn_patrimonio_atual2` text DEFAULT NULL,
  `mn_nserie_atual2` text DEFAULT NULL,
  `mn_marca_atual3` text DEFAULT NULL,
  `mn_modelo_atual3` text DEFAULT NULL,
  `mn_patrimonio_atual3` text DEFAULT NULL,
  `mn_nserie_atual3` text CHARACTER SET utf32 DEFAULT NULL,
  `mq_marca_novo` text DEFAULT NULL,
  `mq_modelo_novo` text DEFAULT NULL,
  `mq_patrimonio_novo` text DEFAULT NULL,
  `mq_hostname_novo` text DEFAULT NULL,
  `mq_nserie_novo` text DEFAULT NULL,
  `mq_rede_novo` text DEFAULT NULL,
  `mn_marca_novo1` text DEFAULT NULL,
  `mn_modelo_novo1` text DEFAULT NULL,
  `mn_patrimonio_novo1` text DEFAULT NULL,
  `mn_nserie_novo1` text DEFAULT NULL,
  `mn_marca_novo2` text DEFAULT NULL,
  `mn_modelo_novo2` text DEFAULT NULL,
  `mn_patrimonio_novo2` text DEFAULT NULL,
  `mn_nserie_novo2` text DEFAULT NULL,
  `mn_marca_novo3` text DEFAULT NULL,
  `mn_modelo_novo3` text DEFAULT NULL,
  `mn_patrimonio_novo3` text DEFAULT NULL,
  `mn_nserie_novo3` text DEFAULT NULL,
  `mq_marca_qrt` text DEFAULT NULL,
  `mq_modelo_qrt` text DEFAULT NULL,
  `mq_patrimonio_qrt` text DEFAULT NULL,
  `mq_hostname_qrt` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `mq_nserie_qrt` text DEFAULT NULL,
  `mq_rede_qrt` text DEFAULT NULL,
  `software1` text DEFAULT NULL,
  `software2` text DEFAULT NULL,
  `software3` text DEFAULT NULL,
  `software4` text DEFAULT NULL,
  `software5` text DEFAULT NULL,
  `software6` text DEFAULT NULL,
  `software7` text DEFAULT NULL,
  `software8` text DEFAULT NULL,
  `software9` text DEFAULT NULL,
  `software10` text DEFAULT NULL,
  `sof1` text DEFAULT NULL,
  `sof2` text DEFAULT NULL,
  `sof3` text DEFAULT NULL,
  `sof4` text DEFAULT NULL,
  `sof5` text DEFAULT NULL,
  `sof6` text DEFAULT NULL,
  `sof7` text DEFAULT NULL,
  `sof8` text DEFAULT NULL,
  `sof9` text DEFAULT NULL,
  `sof10` text DEFAULT NULL,
  `bkp` text DEFAULT NULL,
  `admin` text DEFAULT NULL,
  `ac_devolvido` text DEFAULT NULL,
  `ac_mantido` text DEFAULT NULL,
  `cidade` text DEFAULT NULL,
  `dt_data_rollout` date DEFAULT NULL,
  `data_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_termos`
--

CREATE TABLE `tb_termos` (
  `id_termos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `termo` text DEFAULT NULL,
  `n_chamadoT` text DEFAULT NULL,
  `situacao_t` text DEFAULT NULL,
  `nome_t` text DEFAULT NULL,
  `diretoria_t` text DEFAULT NULL,
  `gerencia_t` text DEFAULT NULL,
  `gerencia_exeT` text DEFAULT NULL,
  `equipamento_1` text DEFAULT NULL,
  `qtd_1` int(50) NOT NULL,
  `acessorios_t` text DEFAULT NULL,
  `observacao_t` text DEFAULT NULL,
  `finalidade` text DEFAULT NULL,
  `dt_data` date DEFAULT NULL,
  `cidade` text DEFAULT NULL,
  `data_registro` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_userspasswordsrecoveries`
--

CREATE TABLE `tb_userspasswordsrecoveries` (
  `idrecovery` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `desip` varchar(45) NOT NULL,
  `dtrecovery` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `localidade` text DEFAULT NULL,
  `data_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `nome_user` varchar(64) NOT NULL,
  `login` varchar(64) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `inadmin` tinyint(4) NOT NULL,
  `cargo` varchar(64) NOT NULL,
  `empresa` varchar(64) NOT NULL,
  `foto` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `email`, `localidade`, `data_registro`, `nome_user`, `login`, `senha`, `inadmin`, `cargo`, `empresa`, `foto`) VALUES
(43, 'admin@admin.net', 'Brasília', '2021-08-04 01:33:56', 'Administrador', 'admin', '$2y$12$qaBJj3c6pXYv3Ndu5ODqI.NF9TgLDc5qfAsRFuZld37TGWVdrEuZu', 1, 'Analista de Suporte N3', 'ONS', '20220607050613');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_arquivos_documentos`
--
ALTER TABLE `tb_arquivos_documentos`
  ADD PRIMARY KEY (`id_arquivoD`),
  ADD KEY `fk_arquivos_documentos_usuarios` (`id_usuario`),
  ADD KEY `fk_arquivos_documentos_documentos` (`id_documento`);

--
-- Índices para tabela `tb_arquivos_rollouts`
--
ALTER TABLE `tb_arquivos_rollouts`
  ADD PRIMARY KEY (`id_arquivoR`),
  ADD KEY `fk_arquivos_rollout_rollouts` (`id_rollout`),
  ADD KEY `fk_arquivos_rollout_usuarios` (`id_usuario`);

--
-- Índices para tabela `tb_arquivos_termos`
--
ALTER TABLE `tb_arquivos_termos`
  ADD PRIMARY KEY (`id_arquivoT`),
  ADD KEY `fk_arquivos_termos_termos` (`id_termos`),
  ADD KEY `fk_arquivos_termos_usuarios` (`id_usuario`);

--
-- Índices para tabela `tb_documentos`
--
ALTER TABLE `tb_documentos`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `fk_documentos_usuarios` (`id_usuario`);

--
-- Índices para tabela `tb_rollouts`
--
ALTER TABLE `tb_rollouts`
  ADD PRIMARY KEY (`id_rollout`),
  ADD KEY `fk_rollouts_users` (`id_usuario`) USING BTREE;

--
-- Índices para tabela `tb_termos`
--
ALTER TABLE `tb_termos`
  ADD PRIMARY KEY (`id_termos`),
  ADD KEY `fk_termos_usuarios` (`id_usuario`);

--
-- Índices para tabela `tb_userspasswordsrecoveries`
--
ALTER TABLE `tb_userspasswordsrecoveries`
  ADD PRIMARY KEY (`idrecovery`),
  ADD KEY `fk_userspasswordsrecoveries_users` (`id_usuario`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `iduser` (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_arquivos_documentos`
--
ALTER TABLE `tb_arquivos_documentos`
  MODIFY `id_arquivoD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tb_arquivos_rollouts`
--
ALTER TABLE `tb_arquivos_rollouts`
  MODIFY `id_arquivoR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_arquivos_termos`
--
ALTER TABLE `tb_arquivos_termos`
  MODIFY `id_arquivoT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `tb_documentos`
--
ALTER TABLE `tb_documentos`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tb_rollouts`
--
ALTER TABLE `tb_rollouts`
  MODIFY `id_rollout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tb_termos`
--
ALTER TABLE `tb_termos`
  MODIFY `id_termos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT de tabela `tb_userspasswordsrecoveries`
--
ALTER TABLE `tb_userspasswordsrecoveries`
  MODIFY `idrecovery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_arquivos_documentos`
--
ALTER TABLE `tb_arquivos_documentos`
  ADD CONSTRAINT `fk_arquivos_documentos_documentos` FOREIGN KEY (`id_documento`) REFERENCES `tb_documentos` (`id_documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_arquivos_rollouts`
--
ALTER TABLE `tb_arquivos_rollouts`
  ADD CONSTRAINT `fk_arquivos_rollouts_rollouts` FOREIGN KEY (`id_rollout`) REFERENCES `tb_rollouts` (`id_rollout`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_arquivos_rollouts_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_arquivos_termos`
--
ALTER TABLE `tb_arquivos_termos`
  ADD CONSTRAINT `fk_arquivos_termos_termos` FOREIGN KEY (`id_termos`) REFERENCES `tb_termos` (`id_termos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_arquivos_termos_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_documentos`
--
ALTER TABLE `tb_documentos`
  ADD CONSTRAINT `fk_documentos_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `tb_rollouts`
--
ALTER TABLE `tb_rollouts`
  ADD CONSTRAINT `fk_rollouts_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_termos`
--
ALTER TABLE `tb_termos`
  ADD CONSTRAINT `fk_termos_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_userspasswordsrecoveries`
--
ALTER TABLE `tb_userspasswordsrecoveries`
  ADD CONSTRAINT `fk_userspasswordsrecoveries_users` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
