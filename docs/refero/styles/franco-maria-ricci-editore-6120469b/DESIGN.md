# Franco Maria Ricci Editore — Refero Style

- Refero URL: https://styles.refero.design/style/6120469b-a1c8-46d3-b7fd-8aa6dc22c0d9
- Site URL: https://www.francomariaricci.com/en
- ID: 6120469b-a1c8-46d3-b7fd-8aa6dc22c0d9
- Theme: light
- Industry: media
- Created: 2026-04-30T02:49:19.178Z
- Ranks: newest: 286, popular: 1220, trending: 1238

> Ivory Page, Golden Inscription

## Description

Franco Maria Ricci's design system evokes the gravitas of classic publishing with a pristine white canvas and sharp, high-contrast typography. Its visual identity relies on subtle use of a single, rich gold accent for highlighting and interactive states, creating an understated elegance. Components are minimal, often borderless and shadowless, allowing the content—primarily art books—to command attention. The overall impression is one of sparse luxury and meticulous curation, where visual space is as important as the elements it contains.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, elevated surface backgrounds, neutral text |
| Warm Paper | #f6f6f6 | neutral | Subtle background for sections, creating a slight textural difference from the main canvas |
| Faded Gray | #b3b3b3 | neutral | Muted background elements, creating soft contrast in certain sections |
| Midnight Ink | #000000 | neutral | Primary text, borders, iconography — providing high contrast against light surfaces |
| Baroque Gold | #bc9c5c | brand | Accent for headings, interactive borders, links, and decorative elements — signifying importance and elegance |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| BodoniSvntytwoITCStd-Book | serif | 400 | 12px, 14px, 16px, 18px, 22px, 42px | 0.95, 1.25 | Primary typeface for all core content, headings, and UI elements. Its classic serifs contribute to the brand's authoritative and artistic tone. The tightest line-heights are for display-level text, while smaller body text uses more generous spacing. |
| BodoniSvntytwoITCStd-BookIt | serif | 400 | 16px, 22px, 42px | 1.25 | Used for emphasizing select headings and body text, providing a calligraphic accent within the core Bodoni family. |
| Arial | sans-serif | 400, 700 | 12px, 14px | 1.25 | Secondary sans-serif for functional text, helper text, and some navigation elements, providing legibility at small sizes while maintaining a modern, understated presence. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.25 |  |
| body-sm | 14 | 1.25 |  |
| body | 16 | 1.25 |  |
| subheading | 18 | 1.25 |  |
| heading-sm | 22 | 1.25 |  |
| heading | 42 | 0.95 |  |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "48px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Interactive elements with minimal visual footprint, often acting as links or secondary actions. Their visual weight is conveyed through text and a subtle border or underline.

Background: transparent. Text color: Midnight Ink (#000000). Border: 1px solid Midnight Ink (#000000) only for some variants, others borderless. Radius: 0px. Padding: 0px.

### Outlined Accent Button

**Role:** Primary Call-to-action or important interactive elements, distinguished by the Baroque Gold border.

Background: transparent (rgba(0,0,0,0)). Text color: Baroque Gold (#bc9c5c) or Midnight Ink (#000000). Border: 1px solid Baroque Gold (#bc9c5c). Radius: 0px. Padding: Often 0px, integrated into typography.

### Product Display Card

**Role:** Used to showcase individual product items like books, emphasizing the product image itself.

Background: transparent (rgba(0,0,0,0)). Radius: 0px. Box shadow: none. Padding: 0px top/right/left, 474px bottom (for vertical spacing of content below).

### Text Input (Underlined)

**Role:** Standard input field for forms, with minimal styling.

Background: transparent (rgba(0,0,0,0)). Text color: Midnight Ink (#000000). Border: 1px solid Midnight Ink (#000000) on bottom only. Radius: 0px. Padding: 8px vertical, 0px horizontal.

## Do's

- Prioritize BodoniSvntytwoITCStd-Book (or a serif substitute) for all headings and body text, especially at larger sizes, to maintain a classic, editorial feel.
- Use Midnight Ink (#000000) for all primary text and main UI borders to ensure high contrast and a strong visual presence.
- Introduce Baroque Gold (#bc9c5c) sparingly, primarily for interactive element borders, links, or decorative accents to draw attention without overwhelming the design.
- Maintain hard, crisp edges: utilize 0px border-radius for all components, including buttons, cards, and input fields.
- Leverage ample whitespace as a primary design element; backgrounds should predominantly be Canvas White (#ffffff) or Warm Paper (#f6f6f6).
- Ensure interactive elements appear as ghost buttons or outlined elements, rather than solid fills, minimizing visual weight.
- When displaying products or imagery, use transparent backgrounds and 0px padding/radius on cards to allow the content to breathe and maintain a gallery-like presentation.

## Don'ts

- Avoid solid background colors for buttons; they contradict the ghost/outlined aesthetic.
- Do not use highly saturated colors outside the brand's Baroque Gold accent; maintain a largely achromatic palette.
- Refrain from using rounded corners or soft edges on any UI elements; the design emphasizes sharp, precise lines.
- Do not introduce drop shadows for elevation; rely on spacing and subtle background color changes for visual hierarchy.
- Avoid dense, information-heavy layouts; prioritize spaciousness and clear visual separation between elements.
- Do not use font weights other than 400 for serif typefaces, or 400/700 for Arial, to preserve typographic precision.
- Avoid large hero sections with busy imagery; focus on clean typographic statements and minimal visual content.

## Layout

The page adheres to a max-width contained layout, though the exact max-width is not defined globally but suggested through consistent margins. The hero section often features a centered headline over a background graphic or illustration. Content flows in distinct sections, often with alternating background colors (Canvas White and Warm Paper) to delineate blocks. A common pattern is a grid-based display for product listings, using 3-column layouts for cards. Navigation is a subtle top bar with minimal elements, suggesting a focus on content browsing rather than complex interactions. The rhythm is spacious and measured, with significant vertical spacing between sections.

## Imagery

The visual language focuses heavily on product shots of books, often isolated on neutral backgrounds, showcasing the cover art as the primary visual. When illustrations are present, particularly the Erte artwork, they are highly stylized with strong outlines and often featuring the Baroque Gold as a key color. Iconography tends to be minimalistic, outlined, and in Midnight Ink. Imagery's role is primarily decorative atmosphere and product showcase, with a bias towards text-dominant layouts punctuated by key visuals. The density is moderate, with images usually contained within well-defined, singular areas, not overlapping or full-bleed across sections.

## Similar Brands

| Business | Why |
| --- | --- |
| Phaidon | High-end art book publisher with a focus on editorial design, elegant typography, and product-focused imagery on clean backgrounds. |
| Taschen | Known for large-format art books, often characterized by classic serif typography, minimal UI, and a premium aesthetic. |
| The New York Times | Classic serif typography, high-contrast black and white palette with subtle accent colors, and a strong editorial feel for textual content. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
- text: #000000
- background: #ffffff
- border: #000000
- accent: #bc9c5c
- primary action: #bc9c5c (outlined action border)

**3-5 Example Component Prompts:**
1. Create a section with a heading "Our Selection" (BodoniSvntytwoITCStd-Book, 42px, #000000, lineHeight 0.95), followed by a 3-column grid of Product Display Cards. Each card should have transparent background, 0px border-radius, 0px padding, and contain a product image.
2. Design a navigation link "{ DISCOVER THE SPRING SALES }" using BodoniSvntytwoITCStd-Book, 14px, #000000, with a 1px solid #bc9c5c border-bottom. The element should have 0px padding.
3. Create an input field for a newsletter signup: use a transparent background (rgba(0,0,0,0)), text color #000000, 1px solid #000000 bottom border, 0px border-radius, and 8px vertical padding horizontally centered on the page.
4. Produce a 'Read More' link styled as a Ghost Button: BodoniSvntytwoITCStd-Book, 14px, #000000, with an underline effect defined by a 1px solid #000000 border-bottom, no padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517309309-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517309309-thumb.jpg |
