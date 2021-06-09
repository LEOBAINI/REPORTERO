USE [MonitorDB]
GO

/****** Object:  View [dbo].[v_manto6_detalle]    Script Date: 31/5/2021 16:43:06 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO



CREATE VIEW [dbo].[v_manto6_detalle]
AS
SELECT     sy.cs_no,ev.system_no, ev.event_id,ev.event_date, ev.zone_id, ev.event_descr, ev.comment
FROM            dbo.event_history ev with(nolock)
inner join system sy  with(nolock) on ev.system_no=sy.system_no
WHERE        (event_date BETWEEN GETDATE() - 15 AND GETDATE()) AND (event_id IN ('G-FT', 'CIE355', 'CIE315', 'SI319', 'CIE344', 'CIE102', 'SI191', 'AHS032', 'AHS031', 'AHS033', 'CIE144', 'CIE143', 'SI099', 'AHS002', 'AHS019', 'SI232', 'CIE311', 'FRN015', 'CIE338', 'CIE145', 'CIE350', 'FSMNEO', 
                         'CIE381', 'G-LB', 'CIE384', 'SI035', 'RDX040', 'CIE321', 'FGPNEO', 'FETNEO', 'FLSNEO', 'CIE330', 'PC1NEO', 'SI078', 'SI108', 'SI211', 'CIE373', 'CIE333', 'SI055', '850', 'FRN036', 'FEGNEO', 'FRN019', 'FRN054', 'FTVIP', 'FRN009', 
                         'CIE383', 'PC3NEO', 'CIE302', 'CIE300', 'SG008', 'CIE137', 'FRN003', 'SI085', 'FRN017', 'CIE380', 'G-NOTT', 'CIE351', 'CIE352', 'CIE354'))
GO

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[40] 4[20] 2[20] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "event_history"
            Begin Extent = 
               Top = 6
               Left = 38
               Bottom = 136
               Right = 238
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 1440
         Alias = 900
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'v_manto6_detalle'
GO

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=1 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'v_manto6_detalle'
GO


