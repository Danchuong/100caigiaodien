# Perplexity AI — Refero Style

- Refero URL: https://styles.refero.design/style/81afaa5c-73ac-4ef4-9a99-296da325ea6c
- Site URL: https://perplexity.ai
- ID: 81afaa5c-73ac-4ef4-9a99-296da325ea6c
- Theme: light
- Industry: ai
- Created: 2026-02-08T10:39:37.000Z
- Ranks: newest: 1219, popular: 14, trending: 31

> Ivory Desk, Graphite Tools — a pristine, brightly lit workspace filled with essential gray instruments.

## Description

This system projects an academic, almost clinical, aesthetic through a severely limited palette of desaturated off-whites and dark grays, creating an atmosphere of focused utilitarianism. The meticulous use of varying gray tones defines clear information hierarchy and interaction states without relying on strong color accents. Sharp corners mix with extreme pill-shaped elements, establishing a visual tension between precise structure and approachable interaction, characteristic of AI tools balancing complexity with user-friendliness.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Inkwell | #000000 | neutral | Primary text, interactive icons, active states – commands immediate attention against the subtle backgrounds. |
| Paper White | #FFFFFF | neutral | Main page background, pristine canvas for content. The brightest neutral. |
| Parchment | #FAF8F5 | neutral | Interactive element backgrounds like search bars and buttons in inactive states, providing a soft contrast to the main background. |
| Graphite | #27251 | neutral | Secondary text, subtle backgrounds for elevated elements, and borders for input fields – registers as dark but softer than pure black. |
| Faded Stone | #92918B | neutral | Placeholder text, subtle contextual information, providing low-contrast visual guiding. |
| Dusk Gray | #72706B | neutral | Tertiary text, inactive icons, divider lines – defines softer visual cues and non-critical information. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| pplxSans | Inter | 400, 500 | 12px, 14px, 16px | 1.33, 1.43, 1.50, 2.00 | All text elements, including body, navigation, and headings. Its use across all types creates a cohesive, restrained tone. The custom font contributes to a distinctive feel, avoiding common system fonts for a unique subtle character. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body-sm | 14 | 1.5 |  |
| body | 16 | 1.5 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "inputs": "8px",
    "buttons": "9999px",
    "navigation": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "32px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Search Input Field



### Sidebar Navigation Menu



### Try Computer Suggestion Cards



### Primary Navigation Item (Active)

**Role:** Indicates current selected item in the sidebar navigation.

Background: Parchment (#FAF8F5), Text: Inkwell (#000000), Border Radius: 8px, Padding: 4px vertical, 12px horizontal. `pplxSans` 400 at 16px.

### Primary Navigation Item (Inactive)

**Role:** Non-selected items in the sidebar navigation.

Background: transparent, Text: Graphite (#27251E), Border Radius: 8px, Padding: 4px vertical, 12px horizontal. `pplxSans` 400 at 16px.

### Search Input Field

**Role:** Main input area for user queries.

Background: Parchment (#FAF8F5), Border Radius: 8px, Left padding 16px, Right padding 12px. Placeholder text: Dusk Gray (#72706B). `pplxSans` 400 at 16px.

### Pill Button (Default)

**Role:** General action button with a rounded style.

Background: transparent, Text: Faded Stone (#92918B), Border Radius: 9999px, Padding: 0px. `pplxSans` 400 at 14px.

### Pill Button (Accent)

**Role:** Interactive elements within the search bar or filter tags.

Background: Graphite (#27251E), Text: Paper White (#FDFBFA), Border Radius: 9999px, Padding 0px. `pplxSans` 400 at 14px.

## Do's

- Prioritize Graphite (#27251E) for secondary text and subtle UI elements to maintain a restrained aesthetic.
- Use Paper White (#FFFFFF) as the predominant background, with Parchment (#FAF8F5) for interactive surfaces to create depth without strong shadows.
- Apply 9999px border-radius to all interactive buttons and tags for a distinctive pill shape.
- Maintain 8px border-radius for input fields and active navigation items to denote interactive, contained elements.
- Use Inkwell (#000000) exclusively for primary text and critical interactive icons for maximum clarity and contrast.
- Ensure 4px vertical padding for list items and 8px for internal element gaps to maintain a compact density.
- Use the `pplxSans` font at weight 400 for all body and informational text for consistent tone.

## Don'ts

- Avoid chromatic colors; this system relies exclusively on shades of gray and off-white.
- Do not use box-shadows that are anything other than extremely subtle; surface differentiation comes from color variants, not elevation.
- Do not introduce square buttons or elements if they contain interactive copy or serve as primary actions; use the 9999px radius.
- Do not vary font families; stick strictly to `pplxSans` (or 'Inter') for all typographic elements.
- Do not use font weights other than 400 or 500.
- Avoid large spacing values; the design emphasizes information density with 4px and 8px increments.

## Layout

The page adheres to a two-column, fixed-width layout. A left sidebar (900px wide) serves as primary navigation, featuring a search input and content categories. The main content area occupies the rest of the available width, centered, and contains the core interactive elements. The hero section prominently displays the brand name 'perplexity' centered, followed by the main AI query input field. Section rhythm is consistent, separated by distinct horizontal gaps and color differentiation rather than borders, creating a spacious yet focused interface. Content is primarily stacked vertically in the main area, with smaller interactive elements arranged horizontally.

## Imagery

The site uses an icons-only approach, with no photography, illustrations, or complex graphics. Icons are monochrome, primarily Inkwell (#000000) or Graphite (#27251E), and are used functionally to denote actions or categories. Their role is purely explanatory, supporting the text-dominant interface. The density is very low, presenting a purely UI-driven experience without decorative visuals.

## Similar Brands

| Business | Why |
| --- | --- |
| Notion | Monochromatic interface with off-white/gray palette, emphasizing text and functional elements over decorative visuals. Similar component styling with subtle background shifts. |
| Linear | Predominantly type-driven, compact layout, and a focus on shades of gray for hierarchy rather than strong accent colors. Uses similar sharp/pill radius contrast. |
| ChatGPT | Text-heavy AI interface with a clean, understated aesthetic, minimal use of color, and high legibility. Similar input and interactive button styling. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (Primary): #000000 (Inkwell)
- Background (Page): #FFFFFF (Paper White)
- Background (Surface/Active Nav): #FAF8F5 (Parchment)
- Text (Secondary): #27251 (Graphite)
- Border/Input Placeholder: #92918B (Faded Stone)

### Example Component Prompts
1. Create a `Primary Navigation Item (Active)`: Background Parchment (#FAF8F5), Text Inkwell (#000000), Border Radius 8px, Padding 4px vertical 12px horizontal. Use `pplxSans` 400 at 16px.
2. Create a `Search Input Field`: Background Parchment (#FAF8F5), Border Radius 8px. Left padding 16px, Right padding 12px. Placeholder text Faded Stone (#92918B). Use `pplxSans` 400 at 16px.
3. Create a `Pill Button (Accent)`: Background Graphite (#27251E), Text Paper White (#FDFBFA), Border Radius 9999px, Padding 0px. Use `pplxSans` 400 at 14px.
4. Design a `Prompt Suggestion Card` with content 'Try Computer'. Background Paper White (#FFFFFF), Border Radius 16px, Padding 16px. Text Faded Stone (#92918B) `pplxSans` 400 at 14px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923655550-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923655550-thumb.jpg |
