# Google — Refero Style

- Refero URL: https://styles.refero.design/style/a601d953-3b34-4bf3-8615-7550813b9b65
- Site URL: https://billi.app
- ID: a601d953-3b34-4bf3-8615-7550813b9b65
- Theme: dark
- Industry: other
- Created: 2026-04-30T03:35:22.727Z
- Ranks: newest: 119, popular: 994, trending: 1038

> Midnight command center

## Description

The Google Dark theme embraces a deep, muted aesthetic, creating a 'command center' feel. Primary text is bright white, contrasted against dark charcoal and slate backgrounds, minimizing eye strain for extended use. Interaction elements are clearly defined through shape and subtle elevation, with a focused accent blue for clickable states and status indicators. The typography is direct and functional, supporting a dense yet organized information display.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Midnight | #16171a | neutral | Page background, primary canvas |
| Charcoal Slate | #4d5156 | neutral | Elevated surfaces, card backgrounds, muted interactive elements |
| Dark Cement | #303134 | neutral | Button backgrounds, input fields, secondary elevated surfaces |
| Ash Gray | #444746 | neutral | Subtle borders and dividers |
| Light Ghost | #e8e8e8 | neutral | Primary text, icon fill, outline button borders |
| Muted Silver | #bfbfbf | neutral | Secondary text, subtle icon fill, decorative borders |
| Arctic Mist | #c2e7ff | neutral | Navigation backgrounds, subtle accent surfaces |
| Primary Blue | #99c3ff | accent | Link text, active button borders, interactive highlights |
| Deep Ocean Blue | #001d35 | accent | Navigation item active state indicators, strong accent borders |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Arial | system-ui | 400 | 13px, 14px | 1.20, 1.85, 2.15 | Body text, navigation links, and button labels, prioritizing clarity and system-font ubiquity. |
| Google Sans | Roboto, sans-serif | 400, 500 | 14px, 16px | 1.20, 1.38, 1.43 | Primary headings, prominent labels, and call-to-action text, providing a distinctive brand voice through its slightly rounded, modern sans-serif form. |
| Google Sans Text | Roboto, sans-serif | 500 | 14px | 1.29 | Specific navigation elements, offering a slightly more compact and functional feel than regular Google Sans. |

## Spacing & Shape

```json
{
  "radius": {
    "input": "0px",
    "buttons": "8px",
    "searchBar": "100px",
    "actionIcon": "9999px"
  },
  "elementGap": "15px",
  "sectionGap": "20px",
  "cardPadding": "14px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link

**Role:** Top-level navigation and utility links.

Text uses Arial 400 at 14px, color Light Ghost (#e8e8e8), normal letter spacing.

### Primary Search Button

**Role:** Main search action buttons.

Background Dark Cement (#303134), text Light Ghost (#e8e8e8), Google Sans 400 at 14px. Padding 0px top/bottom, 16px left/right. Border radius 8px.

### Ghost Action Button

**Role:** Secondary and tertiary actions, such as 'I'm Feeling Lucky'.

Background transparent, text Light Ghost (#BFBFBF / #e8e8e8 as observed), Arial 400. Padding 0px top/bottom, 8px left/right.

### Circular Icon Button

**Role:** Icon-only interactive elements in the header.

Background transparent, icon color Primary Blue (#99c3ff) for active states. Padding 8px all around, border radius 9999px.

### Search Input Field

**Role:** The central search bar input element.

Background Dark Cement (#303134), text Light Ghost (#e8e8e8), Google Sans 400. Placeholder text is the same. Border radius 100px.

### AI Mode Tag

**Role:** Indicates special AI features.

Background transparent, text Primary Blue (#99c3ff). Border is 1px solid Primary Blue (#99c3ff). Border radius 9999px.

### Primary Account Button

**Role:** User account sign-in action.

Background Arctic Mist (#c2e7ff), text Deep Ocean Blue (#001d35). Google Sans Text 500 at 14px. Border radius 100px, 10px padding top/bottom, 15px left/right.

## Do's

- Prioritize Deep Midnight (#16171a) as the dominant background color for all primary canvas areas.
- Use Light Ghost (#e8e8e8) for all primary body text and main iconography.
- Apply Primary Blue (#99c3ff) for all links, active states, and interactive accents to denote functionality.
- Style buttons with a Dark Cement (#303134) background, Light Ghost (#e8e8e8) text, and 8px border-radius.
- Separate distinct content sections using a minimum vertical gap of 20px.
- Maintain a border-radius of 100px for large interactive elements like the search bar and primary account buttons.
- Use Google Sans for all prominent headings and calls to action, ensuring a weight of 400 or 500.

## Don'ts

- Avoid using bright, saturated colors for backgrounds; maintain a dark, muted palette for surfaces.
- Do not introduce unnecessary borders or shadows; keep surfaces relatively flat with subtle elevation.
- Refrain from drastically changing font families or weights unless specifically outlined for a component or role.
- Do not deviate from the established spacing unit base of 4px; avoid arbitrary pixel values.
- Never use Primary Blue (#99c3ff) as a solid background fill for primary content areas.
- Do not use square corners on interactive elements (buttons, search bars); apply a minimum of 8px radius.
- Avoid making text too small or too low contrast; ensure all text is at least 13px Arial with Light Ghost (#e8e8e8) on dark backgrounds.

## Layout

The page follows a classic centered, max-width layout, approximately 960px wide, despite no explicit max-width token. The hero section is dominated by the large, centered Google logo and the central search input field. Vertical rhythm is established through consistent spacing between the header, search area, and footer navigation. The header and footer are full-width dark bands, segmenting the page content. Components like search buttons and links are often horizontally centered stacks, with key navigation (Gmail, Images) aligned to the top right and utility links (About, Store) to the top left.

## Imagery

The site primarily uses UI elements and iconography rather than rich imagery. Icons are generally outlined or filled in Light Ghost on dark backgrounds, with occasional Primary Blue accents for interactive states. The Google logo is prominent as a central graphic element. Imagery is used minimally and functionally, often as small, clear vector graphics within components, or in the case of the AI Mode button, an icon and text combination. Density is low, with more focus on typography and interaction elements.

## Similar Brands

| Business | Why |
| --- | --- |
| DuckDuckGo | Similar dark-mode lean with focus on search input as central element and minimal UI chrome. |
| Bing | Dark theme interface with a prominent search bar and system-like typography for core interactions. |
| Brave Search | Employs a simple, functional dark UI with a strong emphasis on search and minimal decorative elements, using a specific accent color for links. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #e8e8e8
background: #16171a
border: #4d5156
accent: #99c3ff
primary action: #303134 (filled action)

Example Component Prompts:
Create a primary button 'Buscar con Google': background Dark Cement #303134, text Light Ghost #e8e8e8, Google Sans 400 at 14px, 8px border-radius, 0px vertical padding, 16px horizontal padding.
Create a Primary Action Button: #303134 background, #e8e8e8 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
Generate a search input field: background Dark Cement #303134, text Light Ghost #e8e8e8, Google Sans 400, 100px border-radius, 14px top padding.
Construct a circular icon button for 'Iniciar sesión': background Arctic Mist #c2e7ff, text Deep Ocean Blue #001d35, Google Sans Text 500 at 14px, 100px border-radius, 10px vertical padding, 15px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520106578-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520106578-thumb.jpg |
