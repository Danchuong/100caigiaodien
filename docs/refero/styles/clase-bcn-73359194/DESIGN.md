# Clase bcn — Refero Style

- Refero URL: https://styles.refero.design/style/73359194-de93-436e-af53-81d4029f5e7a
- Site URL: https://clasebcn.com
- ID: 73359194-de93-436e-af53-81d4029f5e7a
- Theme: light
- Industry: agency
- Created: 2026-04-30T03:52:36.403Z
- Ranks: newest: 40, popular: 1106, trending: 1097

> Crisp Editorial Blocks

## Description

Clase bcn employs a stark, editorial aesthetic centered on strong typography and a modular layout. It operates primarily in monochrome with occasional, deliberate use of vivid, flat color blocks as section backgrounds, creating a distinct visual break and impact. The design emphasizes clear content presentation through large, confident text and a comfortable spacing rhythm, allowing the eye to focus on the work examples the agency presents without distraction. Interactive elements are subtly integrated, maintaining the clean, minimalist feel.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Primary page background, general surface. Provides a clean, bright foundation |
| Ink Black | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Deep Graphite | #0a0a0a | neutral | Secondary text color, slightly softer than Ink Black, used for subheadings and contextual links |
| Light Concrete | #e8e8e8 | neutral | Subtle background for alternate sections or cards, offering a slight visual shift from pure white |
| Muted Sage | #adada0 | neutral | Background for specific content blocks or cards, providing a soft natural earth tone |
| Ash Gray | #939393 | neutral | Muted text for navigation and less prominent links, providing hierarchy through reduced contrast |
| Silver Link | #aaaaaa | neutral | Subtle link text for footer or utility navigation, further de-emphasizing non-primary information |
| Jet Black | #0a0000 | neutral | Deep, almost pure black used for specific section backgrounds, creating strong contrast |
| Charcoal Slate | #262a36 | neutral | Darkest neutral for background sections or cards, subtly distinct from Jet Black |
| Blush Sand | #efccbe | brand | Warm, earthy background for specific featured content blocks, adding a touch of personality |
| Vivid Succulent | #43d491 | brand | Vibrant, attention-grabbing background for featured content blocks, acting as a strong visual accent |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| SuisseIntl-Regular | Arial | 400 | 24px, 28px, 45px | 1.11, 1.17, 1.21, 1.25, 1.79, 2.01, 2.44 | The primary typeface for all text. Its consistent weight across various sizes gives a uniform, professional, and slightly understated feel, allowing the content itself to stand out. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 24 | 1.79 |  |
| body | 28 | 1.25 |  |
| heading | 45 | 1.11 |  |

## Spacing & Shape

```json
{
  "radius": {
    "all": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "100px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link

**Role:** Main navigation items and utility links.

Text uses SuisseIntl-Regular at 400 weight. Main nav items are in `Ash Gray` while utility links are `Silver Link`. No background, no radius, minimalist. Hover states are implied by text color change or subtle underline.

### Project Card (Light Concrete)

**Role:** Standard project listing block.

Background is `Light Concrete` (#e8e8e8). No border, no shadow, 0px border-radius. Padding of 20px on all sides. Heading text uses `Ink Black` or `Deep Graphite`, body text uses SuisseIntl-Regular. 'See the case' link is `Ink Black` with an arrow decorator.

### Project Card (Jet Black)

**Role:** Alternative dark project listing block.

Background is `Jet Black` (#0a0000). No border, no shadow, 0px border-radius. Padding of 20px on all sides. Heading and body text uses `Canvas White`. 'See the case' link is `Canvas White` with an arrow decorator.

### Project Card (Blush Sand)

**Role:** Accent themed project listing block.

Background is `Blush Sand` (#efccbe). No border, no shadow, 0px border-radius. Padding of 20px on all sides. Heading and body text uses `Ink Black`. 'See the case' link is `Ink Black` with an arrow decorator.

### Project Card (Vivid Succulent)

**Role:** Accent themed project listing block.

Background is `Vivid Succulent` (#43d491). No border, no shadow, 0px border-radius. Padding of 20px on all sides. Heading and body text uses `Ink Black`. 'See the case' link is `Ink Black` with an arrow decorator.

## Do's

- Always use 'SuisseIntl-Regular' for all text elements to maintain typographic consistency.
- Utilize 0px border-radius universally to enforce a sharp, modern aesthetic.
- Apply `Ink Black` (#000000) for primary text and `Canvas White` (#ffffff) for backgrounds to ensure high contrast.
- Use `Ash Gray` (#939393) for secondary navigation or less prominent text to create subtle hierarchy.
- Employ `Vivid Succulent` (#43d491), `Blush Sand` (#efccbe), `Jet Black` (#0a0000), or `Muted Sage` (#adada0) as solid background blocks for feature sections to create visual impact and delineate content areas. Do not use gradients.
- Maintain a comfortable rhythm with `elementGap` at 20px for internal component spacing and `sectionGap` at 100px between large content blocks.
- Ensure all interactive links, particularly 'See the case' links, are rendered in `Ink Black` or `Canvas White` depending on the background, with a distinct right arrow graphic.

## Don'ts

- Do not use rounded corners; the system is defined by its hard edges.
- Avoid any drop shadows or elevation effects; the design relies on flat, layered blocks of color and content.
- Do not introduce new typefaces; 'SuisseIntl-Regular' is the sole typographic voice.
- Refrain from using gradients; all color applications should be flat and solid.
- Do not vary from the established spacing relationships; 20px for elements and 100px for sections are fixed.
- Avoid decorative imagery that competes with the editorial typography; visuals are primarily large, full-bleed backgrounds for project cards.
- Never use generic blue for links; links should be `Ink Black` or `Canvas White` to match the surrounding text.

## Layout

The page adheres to a full-bleed layout, where content sections stretch across the entire viewport width. The hero section features a prominent headline over a large background image. Section rhythm is established through alternating background colors and large vertical `sectionGap` of 100px, creating distinct modular blocks. Content arrangement within these blocks is typically a centered stack of text and links. There are no explicit grid systems for cards, instead relying on full-width content blocks for each project. Navigation is a minimalist top bar with links on the left and a language selector on the right, which remains static at the top.

## Imagery

The visual language is dominated by large-format, full-bleed product or architectural photography and occasional abstract graphic elements. Photography is often presented as background fillers for case study cards, showcasing detailed work or brand aesthetics. The treatment is primarily raw edges, contained within solid color blocks, establishing a gallery-like presentation. There are no small, decorative icons; iconography is limited to simple functional arrows. Imagery serves as evocative mood-setting and product showcase rather than explanatory content, with a high density, often filling entire sections.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA | Monochromatic, editorial layout with bold typography. |
| Pentagram | Focus on large project visuals and strong, simple type. |
| DIA | Minimalist aesthetic with impactful typographic compositions and clear content blocks. |
| Studio Dumbar | Graphic and direct, featuring flat color blocks and strong type as primary visual elements. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: #000000
- background: #ffffff
- border: #000000 (for interactive elements)
- accent: #43d491 (for featured section backgrounds)
- primary action: no distinct CTA color

### 3-5 Example Component Prompts
- Create a static branding statement section: `Canvas White` background, 100px vertical padding. Headline using SuisseIntl-Regular, 45px, 1.11 line-height, `Ink Black` text. Body text using SuisseIntl-Regular, 28px, 1.25 line-height, `Ink Black` text.
- Create a `Project Card (Vivid Succulent)`: full-width. Background color `Vivid Succulent` (#43d491). No border, 0px border-radius, 20px padding on all sides. Heading 'PoMo Museum' in SuisseIntl-Regular, 28px, 1.25 line-height, `Ink Black`. Subheading 'A Museum of Modern & Contemporary Art in Trondheim' in SuisseIntl-Regular, 24px, 1.79 line-height, `Ink Black`. Link 'See the case →' in SuisseIntl-Regular, 24px, 1.79 line-height, `Ink Black`.
- Create a simple navigation menu item: text 'Projects' in SuisseIntl-Regular, 24px, 1.79 line-height, `Ash Gray` (#939393). No background, no border.
- Create a `Project Card (Light Concrete)` section. Use background `Light Concrete` (#e8e8e8). No border, 0px border-radius, 20px padding on all sides. Heading 'Kave Home' in SuisseIntl-Regular, 28px, 1.25 line-height, `Ink Black`. Subheading 'Expanding the Mediterranean imaginary' in SuisseIntl-Regular, 24px, 1.79 line-height, `Ink Black`. Link 'See the case →' in SuisseIntl-Regular, 24px, 1.79 line-height, `Ink Black`.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521137889-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521137889-thumb.jpg |
