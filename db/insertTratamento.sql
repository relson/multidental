--
-- Inserindo dados na tabela `tratamento`
--

INSERT INTO `tratamento` (`idPaciente`, `data`, `procedimento`, `valor`, `orcamentoAprovado`, `DtAprovaOrcamento`, `formaPagamento`, `parcelamento`, `realizado`, `status`, `DtCadastro`, `pago`) VALUES
(8, '2014-03-25', 'Consulta Inicial', 100, 'Não', '0000-00-00 00:00:00', 0, 1, '0', 0, '2014-03-29 14:39:12', 0),
(8, '2014-03-31', 'Consulta Inicial', 150, 'Não', NULL, 0, 1, '0', 0, NULL, 0),
(8, '2014-03-29', 'Consulta Inicial', 100, 'Sim', NULL, 0, 1, 'Não', 1, '2014-03-29 14:41:42', 0),
(8, '2014-03-31', 'Limpeza', 150, 'Sim', NULL, 0, 1, 'Não', 1, '2014-03-29 14:41:51', 0),
(8, '2014-03-31', 'Restauração', 120, 'Sim', NULL, 0, 1, 'Não', 1, '2014-03-29 16:31:48', 0);