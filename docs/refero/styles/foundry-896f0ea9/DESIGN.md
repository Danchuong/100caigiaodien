# Foundry — Refero Style

- Refero URL: https://styles.refero.design/style/896f0ea9-6f1a-40a6-aba7-fdaa579c7352
- Site URL: https://foundry.basement.studio
- ID: 896f0ea9-6f1a-40a6-aba7-fdaa579c7352
- Theme: dark
- Industry: design
- Created: 2026-04-30T01:22:51.397Z
- Ranks: newest: 617, popular: 466, trending: 318

> Typeface Dungeon, Glowing Console

## Description

Basement Foundry evokes a clandestine digital workshop feel, with a stark dark theme serving as a canvas for experimental typography. Its visual identity relies on strong contrasts, minimal adornment, and precise geometric forms, accented by a single vivid orange that acts as both highlight and interactive cue. The system prioritizes clarity and directness, using monospace and utilitarian sans-serif fonts until striking display typefaces take center stage as product showcases. Components are mostly outlined or text-based, maintaining a lightweight, almost 'ghostly' presence against the deep background.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #121212 | neutral | Page backgrounds, primary surface areas, deep void |
| Ghostly Gray | #efefef | neutral | Primary text color, active states, muted icons, surface backgrounds for toggles |
| Wireframe White | #e2e8f0 | neutral | Hairline borders, subtle separators, link underlines, secondary surface borders |
| Shadow Border | #3a3a3a | neutral | Subtle, deeper borders, component outlines on darker surfaces |
| Muted Text | #747474 | neutral | Secondary and tertiary text, helper messages, less prominent details |
| Basement Orange | #ff4d00 | brand | Orange accent for outlined action borders, linked labels, and lightweight interactive emphasis. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| JetBrains Mono | monospace | 400, 700 | 12px, 14px, 18px | 1.14, 1.29, 1.30, 1.32, 1.40, 1.50 | Utilitarian interface text: navigation, buttons, body copy, and secondary information. Its monospace nature grounds the typographic system in a technical, code-like aesthetic. |
| Inter | system-ui | 400 | 14px, 16px, 18px | 1.29, 1.30, 1.50 | Minimal body text and structural elements where a clean, approachable sans-serif is appropriate, contrasting with the monospace for hierarchy. |
| Basement Grotesque Black Expanded | Impact | 400 | 120px | 0.95 | Prominent display typeface for showcasing type specimens. Its bold, expanded form demands attention. |
| Adhesion | serif | 400 | 164px | 1.10 | Dramatic display type for showcasing individual font styles, emphasizing their unique character. |
| FFFLAUTA 400 |  | 400 | 90px | 1.1 | FFFLAUTA 400 — detected in extracted data but not described by AI |
| Mecha Regular |  | 400 | 120px | 1.2 | Mecha Regular — detected in extracted data but not described by AI |
| Curia Regular |  | 400 | 156px | 1.1 | Curia Regular — detected in extracted data but not described by AI |
| Carpenter Regular |  | 400 | 169px | 1.1 | Carpenter Regular — detected in extracted data but not described by AI |
| Bunker Regular |  | 400 | 185px | 1.1 | Bunker Regular — detected in extracted data but not described by AI |
| Trovador Regular |  | 400 | 198px | 1.1 | Trovador Regular — detected in extracted data but not described by AI |
| XER0 Regular |  | 400 | 198px | 1.1 | XER0 Regular — detected in extracted data but not described by AI |
| Caniche Regular |  | 400 | 203px | 1.1 | Caniche Regular — detected in extracted data but not described by AI |
| Blob Regular |  | 400 | 234px | 1.1 | Blob Regular — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.14 | -0.2 |
| body-sm | 14 | 1.29 | 0 |
| body | 18 | 1.3 | 0 |
| heading-lg | 120 | 0.95 | 1.2 |
| display | 164 | 1.1 | 1.64 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "default": "2.8px",
    "interactive": "50%"
  },
  "elementGap": "8px",
  "sectionGap": "90px",
  "cardPadding": "15px",
  "pageMaxWidth": "270px"
}
```

## Components

### Text Link

**Role:** Navigation and informational links within body text.

Links are rendered in Ghostly Gray (#efefef) with no distinct background or border, and a subtle Wireframe White (#e2e8f0) underline on hover. Uses JetBrains Mono at its respective size for context.

### Typeface Navigation Button (Inactive)

**Role:** Navigation item for browsing typeface categories.

A ghost button with text set in Ghostly Gray (#efefef), no background, and a 1px solid Wireframe White (#e2e8f0) bottom border. Padding is 10px on the sides, text is JetBrains Mono 14px.

### Typeface Navigation Button (Active)

**Role:** Currently selected typeface category.

A ghost button with text set in Ghostly Gray (#efefef), no background, and a 1px solid Basement Orange (#ff4d00) bottom border. Padding is 10px on the sides, text is JetBrains Mono 14px.

### Buy Now Button (Outlined)

**Role:** Primary action for purchasing typefaces.

A ghost button with text set in Ghostly Gray (#efefef), no background, and a 1px solid Basement Orange (#ff4d00) border. Padding is 10px on the sides, with a circular 50% border radius. Text is JetBrains Mono 14px.

### Mode Toggle Button

**Role:** Interaction for switching display modes within a typeface showcase.

A ghost button with the text 'Mode 1', 'Mode 2', etc. in Ghostly Gray (#efefef), no background, and a 1px solid Wireframe White (#e2e8f0) border, with a 50% border radius. Padding is 10px on all sides, text is JetBrains Mono 14px.

### Type Specimen Card

**Role:** Container for individual typeface previews.

A dark card with 8px border-radius, acting as a canvas for the large font previews. It has a subtle Wireframe White (#e2e8f0) border on its top edge. Contains its oversized typeface examples.

## Do's

- Prioritize Midnight Ink (#121212) as the base background for most surfaces, embracing the dark theme.
- Use Ghostly Gray (#efefef) for all primary body text and interactive states unless otherwise specified.
- Apply Basement Orange (#ff4d00) sparingly, reserving it for primary interactive elements, active states, and brand highlights.
- Employ Wireframe White (#e2e8f0) for all primary borders, separators, and subtle outlines on neutral components.
- Maintain a compact density for UI elements, using an 8px element gap as a primary spacing unit.
- Ensure JetBrains Mono is the default typeface for all functional UI text where a technical, precise feel is desired.
- Apply 50% border-radius to all small interactive elements like 'mode' buttons and 'buy now' buttons to create distinct visual cues.

## Don'ts

- Avoid using multiple chromatic colors; Basement Orange (#ff4d00) is the sole accent.
- Do not introduce heavy shadows or gradients; flat surfaces and crisp borders define the aesthetic.
- Resist using highly decorative or illustrative imagery that conflicts with the stark, type-focused approach.
- Do not deviate from the JetBrains Mono and Inter types for the main interface, unless introducing a distinct display font for showcased content.
- Avoid large, rounded containers; stick to the subtle 2.8px default border radius for most elements and 8px for cards.
- Do not use Ghostly Gray (#efefef) as a background for primary actions; it is a text/border color.
- Introduce complex animations; stick to simple transitions on color and border-color for interactive elements.

## Layout

The page adheres to a left-aligned, maximal width layout for its primary content area, but with a narrow, fixed-width left sidebar section for navigation and legal links. The hero section is characterized by a full-bleed, dark background integrating dynamic, large-scale type specimen animations. Subsequent sections flow vertically, often featuring full-width dark canvases occupied by prominent typeface showcases, implicitly establishing a consistent vertical rhythm. Content within these sections tends to be centrally balanced or slightly left-biased, with minimal and compact informational text supporting the visual impact of the type. The navigation remains sticky at the top, a horizontal bar against the deep theme, reinforcing the 'single pane of glass' experience.

## Imagery

The site uses minimal explicit imagery beyond typography itself. The primary 'visuals' are dynamic, large-scale renderings of the typefaces, often with textural or glitch-art effects, presented against the dark background. When present, small icons are typically outlined and monochromatic (Ghostly Gray #efefef), maintaining a technical, UI-focused aesthetic. Product screenshots are essentially large typographic specimens, showcasing the fonts without extraneous context.

## Similar Brands

| Business | Why |
| --- | --- |
| Fonts In Use | Showcases typography prominently in a clean context with minimal UI interference. |
| Commercial Type | Features strong, impactful typography as the primary visual display and product. |
| Pangram Pangram Foundry | Utilizes a dark, minimalist aesthetic to frame and highlight complex typefaces. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #efefef
background: #121212
border: #e2e8f0
accent: #ff4d00
primary action: #efefef (filled action)

Example Component Prompts:
1. Create a left-aligned navigation sidebar link for 'Legal': Text `LEGAL` in JetBrains Mono, weight 400, size 14px, #efefef, on a #121212 background. On hover, the text should keep its color, but a 1px solid #e2e8f0 bottom border should appear. The link should have 10px padding-right.
2. Design an active typeface category button: Text `BASMENT GROTESQUE` in JetBrains Mono, weight 400, size 14px, #efefef. The button should have a 1px solid #ff4d00 bottom border, 10px padding-left and padding-right, and no background.
3. Create a 'Buy now' button: Text `Buy now` in JetBrains Mono, weight 400, size 14px, #efefef. The button should have a 1px solid #ff4d00 border, no background, and a 50% border radius with 6px horizontal padding and 0px vertical padding.
4. Build a type specimen card for 'Adhesion': A rectangular container with a #121212 background, 8px border-radius, and a 1px solid #e2e8f0 top border. Inside, the text 'ADHESION' should be displayed using the Adhesion font, weight 400, size 164px, #efefef.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512146328-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512146328-thumb.jpg |
