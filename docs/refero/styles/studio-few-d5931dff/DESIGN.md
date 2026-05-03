# Studio Few — Refero Style

- Refero URL: https://styles.refero.design/style/d5931dff-2ae3-44c7-b76f-9e5936f90611
- Site URL: https://studiofew.com
- ID: d5931dff-2ae3-44c7-b76f-9e5936f90611
- Theme: light
- Industry: design
- Created: 2026-04-30T02:43:26.497Z
- Ranks: newest: 308, popular: 510, trending: 314

> Gallery of Type on White Canvas

## Description

Studio Few embodies a stark, monochromatic aesthetic focused on typography. Surfaces are minimalist, predominantly white, creating a gallery-like backdrop for type specimens. Interaction elements are sharp, high-contrast, and leverage black as a primary action color, emphasizing clarity and directness. The overall feel is one of precise, confident design, allowing the varied and often experimental typefaces to be the central visual event.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, input surfaces, base for content presentation |
| Midnight Black | #000000 | neutral | Primary text, button backgrounds, interactive borders, structural outlines — establishes high-contrast dominance |
| Subtle Gray | #b7b7b7 | neutral | Muted UI elements, secondary borders, inactive states, subtle dividers, informational text |
| Anchor Gray | #333333 | neutral | Link text, subtle background textures, borders that recede slightly from primary black |
| Faded Gray | #858585 | neutral | Muted link text, less prominent border elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| SterlingVF | Inter | 300, 400, 500 | 12px, 14px, 158px | 1.00, 1.20, 1.25, 1.33, 1.43, 1.50, 1.57, 1.60, 1.71, 1.75, 1.86, 2.00 | General UI text, flexible content, navigation, and detailed information. Its variable weight allows for subtle hierarchy and expressive versatility. |
| Formative | Bebas Neue | 400 | 14px, 158px | 1.00 | Primary display font for type specimens and prominent headlines. Its bold, condensed nature and tight tracking create a distinct, impactful visual statement. |
| Voyager | Space Mono | 400 | 14px, 158px | 0.70, 1.00 | Experimental display font for special specimens. Its unique, heavily tracked, and blocky character imparts a distinct, digital aesthetic. |
| AnthroVF | Montserrat | 400 | 14px, 158px | 1.00 | Display font for specific specimens, offering a refined, modern contrast to other display choices. |
| BlokVF | Squarefont | 400 | 14px, 115px | 1.20, 1.71 | Specialized display font with a blocky, geometric style for unique specimen showcases. |
| ArbeitProContrastVF | Archivo | 400 | 14px, 158px | 1.00 | Display font used for showcasing type specimens, characterized by its clean, technical aesthetic. |
| Arbeittechnikvf | IBM Plex Sans | 400 | 14px, 158px | 1.00 | Technical display font for specific specimens, presenting a structured and precise appearance. |
| ApexVF | Chivo | 400 | 14px, 158px | 1.71 | Display font with a distinct, confident stance for type specimens. |
| Work Sans | Work Sans | 400 | 16px | 1.50 | Fallback and general body text for broader readability and system integration. |
| Sterling |  | 400, 500 | 12px, 14px, 16px | 1.33, 1.43, 1.5, 1.67, 1.71, 2, 2.17 | Sterling — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.71 |  |
| body | 14 | 1.5 | 0.17 |
| body-lg | 16 | 1.5 |  |
| display-sm | 115 | 1.2 |  |
| display | 158 | 1 | -2 |

## Spacing & Shape

```json
{
  "radius": {
    "links": "6px",
    "buttons": "6px",
    "general": "2px"
  },
  "elementGap": "16px",
  "sectionGap": "64px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Main call-to-action button, indicating primary actions.

Solid Midnight Black background (#000000) with Canvas White text (#ffffff). Rounded corners at 6px. Padding of 12px vertical, 24px horizontal. Uses SterlingVF font at 14px.

### Navigation Link

**Role:** Header navigation items and inline links.

Canvas White text (#ffffff) on transparent background. No specific border radius. Uses SterlingVF font at varying sizes and weights for navigation. Horizontal padding of 12-24px.

### Input Field

**Role:** Text input areas for filtering or data entry.

Canvas White background (#ffffff) with Midnight Black text (#000000) and Midnight Black borders. No specific border radius. Uses SterlingVF font at default sizes.

### Type Specimen Panel

**Role:** Container for individual typeface demonstrations.

Each panel features a large typeface sample with controls for size and weight. Background is Canvas White (#ffffff). Text color varies between Midnight Black (#000000) and Subtle Gray (#b7b7b7) for controls. No explicit radius, appears square.

### Ghost Button

**Role:** Secondary action or trial options.

Transparent background with a Midnight Black (#000000) border and text color. 6px border radius. Used for 'Trial' action, indicating a less prominent but still interactive element.

## Do's

- Prioritize high contrast using Midnight Black (#000000) and Canvas White (#ffffff) for all main content and interactive elements.
- Use SterlingVF for general UI text, body content, and navigation, varying weights for hierarchy.
- Reserve bold, high-impact display fonts like Formative, Voyager, and AnthroVF for showcasing type specimens and major headlines.
- Apply a 6px border radius consistently to all interactive buttons and links.
- Maintain generous horizontal padding of 24px around block-level interactive elements like buttons.
- Employ Subtle Gray (#b7b7b7) for secondary information, muted controls, and dividers to introduce subtle visual breaks.
- Ensure letter-spacing is precisely managed for display fonts, using values like -0.0200em at large sizes to maintain impact.

## Don'ts

- Avoid introducing chromatic colors; maintain a strictly monochromatic palette featuring only black, white, and various grays.
- Do not use generic system fonts; always specify custom fonts for headlines and body text.
- Never use soft shadows or complex gradients; rely on flat colors, crisp lines, and high contrast for visual hierarchy.
- Do not vary border radius across interactive elements; maintain a consistent 6px for buttons and links.
- Avoid dense or cluttered layouts; leverage ample whitespace to give design elements room to breathe.
- Do not use letter-spacing as a broad stylistic choice; apply it specifically to display typography for visual impact.
- Do not use Canvas White (#ffffff) as the primary action background; Midnight Black (#000000) is reserved for this role.

## Layout

The page primarily uses a full-bleed layout, particularly for hero sections and areas showcasing type specimens. Content is horizontally centered within a logical reading width when necessary, though explicit max-width is frequently overridden by full-width content blocks. The hero section features large, centered headlines paired with abstract graphic arrangements illustrating type. Sections often flow seamlessly into one another, with subtle visual breaks created by the shift in content or imagery alignment rather than strong dividers. Type specimen sections employ implicit grids for presenting individual fonts, using consistent vertical padding for rhythm. Navigation is a minimal top-bar, sticky header at the top right, providing unobtrusive access to key areas. The overall density is comfortable, allowing elements breathing room against the predominantly white canvas.

## Imagery

The visual language is characterized by minimalist, product-focused imagery. This primarily consists of abstract 3D renders or high-quality product mockups of screens showcasing typefaces. Imagery is typically monochrome or desaturated, often appearing on a stark white or light gray background, highlighting the typography itself as the primary visual. The treatment is full-bleed or contained in a way that emphasizes crisp edges and clean compositions. Icons are simple, outlined, and monochromatic, with a thin stroke weight, serving a functional rather than decorative role. Imagery acts as a sophisticated backdrop or direct showcase for the product (fonts), maintaining a strong sense of focus and eliminating distraction, making the site very text-dominant in its information display.

## Similar Brands

| Business | Why |
| --- | --- |
| Pangram Pangram Foundry | Similar high-contrast, black and white aesthetic for showcasing high-quality typography with minimalist UI. |
| Future Fonts | Focus on type specimens with clean layouts and a strong emphasis on typography as the primary visual. |
| Founders Grotesk (Colophon Foundry) | Uses a similar austere, professional, and monochrome design language to highlight typefaces. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: no distinct accent color
primary action: #000000 (filled action)

Example Component Prompts:
1. Create a primary action button: Midnight Black (#000000) background, Canvas White (#ffffff) text. SterlingVF font, weight 400, size 14px. 6px border radius. Padding 12px vertical, 24px horizontal.
2. Design a navigation link: Canvas White (#ffffff) text on transparent background. SterlingVF font, weight 400, size 14px. No specific radius. Padding 12px left/right.
3. Build a display type specimen: Formative font, weight 400, size 158px, letter-spacing -0.0200em, Midnight Black (#000000) text on Canvas White (#ffffff) background.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516984365-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516984365-thumb.jpg |
