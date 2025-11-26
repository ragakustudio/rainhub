# Changelog

## [v0.2.4] – 2025-11-26
### Added
- Reusable portfolio form (`portfolio/form.php`)
- Multi-select services with `portfolio_services` pivot table
- Display services on portfolio detail page

### Fixed
- Removed legacy `service_id` from portfolio table
- Resolved undefined variables (services_list, deliverables_list, selected_xxx)
- Fixed missing image preview on edit page
- Sidebar active highlighting

### UI Improvements
- Rebuilt form layout using grid structure
- Grouped inputs (client/year, city/country, services/deliverables)
- Moved Save/Cancel buttons to bottom
- Removed duplicated page titles
