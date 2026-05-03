# The Fascination The Fascination — Refero Style

- Refero URL: https://styles.refero.design/style/9c60e0a4-a702-49af-9fc1-52edbc9dd902
- Site URL: https://thefascination.com
- ID: 9c60e0a4-a702-49af-9fc1-52edbc9dd902
- Theme: light
- Industry: media
- Created: 2026-04-30T03:54:59.838Z
- Ranks: newest: 29, popular: 1142, trending: 1128

> Editorial content on a crisp canvas

## Description

The Fascination employs a narrative-driven blog aesthetic with ample white space and a clear hierarchy. Typography centers around a robust sans-serif for content and a distinctive script font for thematic accents, creating a balance of utility and branded personality. Interaction is defined by crisp, subtle borders and a singular vivid blue for active states, keeping the focus on editorial content rather than complex UI elements. Most surfaces remain light and neutral, allowing text and imagery to take precedence without visual interruption.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight | #000000 | neutral | Primary text, strong borders, solid button backgrounds, icon fills — provides high contrast for readability and defines interactive elements |
| Storm Gray | #1a202c | neutral | Secondary text, muted borders, subtle background tints — offers slightly softer contrast for longer body copy and supporting information |
| Graphite | #1f2937 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Silver Ash | #767676 | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Sky Blue | #2ea3f2 | accent | Interactive link text, outlined button borders, image highlights — the primary accent for clickable elements and visual emphasis |
| Twilight Violet | #454ad3 | brand | Prominent sectional headings, brand specific elements — a strong, deep violet that signals important content blocks |
| Plum Hue | #4c40e0 | brand | Secondary brand links, interactive states for less prominent actions — a slightly warmer violet for supporting interactive components |
| Neon Purple | #9333ea | accent | Violet text accent for links, tags, and emphasized short phrases. |
| Ghost White | #fbfbf7 | neutral | Primary canvas background, card backgrounds — maintains a bright, airy aesthetic for content presentation |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Graphik | system-ui, sans-serif | 100, 400, 500, 700 | 12px, 14px, 16px, 18px, 20px, 24px, 30px, 96px | 0.80, 1.00, 1.02, 1.20, 1.33, 1.50, 1.53, 1.70, 1.91, 2.19, 2.55 | Primary content font for body text, links, buttons, and most headings — its clean, modern sans-serif character ensures legibility across various scales. The wide range of weights supports a clear typographic hierarchy. |
| Qwitcher Grypen | cursive | 400 | 48px, 60px |  | Decorative display font used for distinctive headings and brand-specific callouts — its script style adds a unique, artisanal flair to key textual elements, counterbalancing the utilitarian Graphik. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body-sm | 14 | 1.5 |  |
| body | 16 | 1.5 |  |
| body-lg | 18 | 1.5 |  |
| heading-sm | 20 | 1.5 |  |
| heading | 24 | 1.3 |  |
| heading-lg | 30 | 1.3 |  |
| display-sm | 96 | 1.3 |  |

## Spacing & Shape

```json
{
  "radius": {
    "links": "6px",
    "buttons": "6px"
  },
  "elementGap": "16px",
  "sectionGap": "32px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call-to-action button for core interactions.

Solid Midnight (#000000) background, Ghost White (#fbfbf7) text. Border-radius 6px. Padding 8px vertical, 16px horizontal. White border for visual separation.

### Ghost Accent Button

**Role:** Secondary action button for less prominent interactions.

Transparent background, Neon Purple (#9333ea) text. No visible border, zero padding.

### Text Link

**Role:** Inline navigation and contextual links.

Sky Blue (#2ea3f2) text. No underline by default, uses color alone for affordance.

### Input Field

**Role:** Standard text input element.

Transparent background, Graphite (#1f2937) text, Silver Ash (#767676) 1px border. No border-radius. No explicit padding provided but visually appears to have some internal spacing.

### Card Item

**Role:** Container for individual content pieces like articles or product listings.

Background is transparent. No border-radius or box-shadow, appearing as raw content on the canvas.

### Category Tag

**Role:** Small, descriptive labels for content categorization.

Transparent background, Midnight (#000000) text. No border-radius or explicit padding is set for these, appearing as simple text labels.

## Do's

- Prioritize Midnight (#000000) for all primary body text and main headings to maintain readability.
- Use Sky Blue (#2ea3f2) exclusively for interactive elements such as links and button outlines, ensuring it serves as a clear call to action.
- Apply Graphik font for all UI text, content, and body copy, utilizing its various weights for hierarchy.
- Reserve Qwitcher Grypen for decorative, prominent headings to introduce brand character, always at larger sizes (48px or 60px).
- Ensure all primary filled buttons use a Midnight (#000000) background with Ghost White (#fbfbf7) text and a 6px border-radius.
- Maintain comfortable density using 16px for element gaps and 32px for section gaps, facilitating easy content scanning.
- Keep card backgrounds transparent with no radius or shadow, allowing content to blend seamlessly with the canvas.

## Don'ts

- Do not introduce new vibrant colors without a clear functional purpose; maintain the restrained chromatic palette.
- Avoid applying box-shadows or border-radii to content cards or basic containers; these elements should remain flat on the canvas.
- Do not use highly saturated brand colors for extensive paragraphs or body text; they are reserved for accents and headings.
- Do not deviate from the 6px border-radius for buttons and links; consistency in subtle roundedness is key.
- Avoid excessive use of the script font Qwitcher Grypen; it is a decorative accent, not a general heading or body font.
- Do not add heavy borders or backgrounds to basic input fields; they should blend into the interface using Silver Ash (#767676) 1px borders.
- Never use text colors other than Midnight (#000000) or Storm Gray (#1a202c) for long-form content to ensure optimal contrast and readability.

## Layout

The page primarily uses a max-width contained layout, though the exact max-width is not consistently defined, suggesting a flexible approach within a comfortable reading measure. The hero section often features a large image or graphic with a centered headline in text, sometimes using the decorative script font. Content sections alternate between visually distinct blocks, typically featuring text-left, image-right compositions or stacked sections. Article listings usually appear in multi-column grids (like the observed 3-column article structure), with consistent vertical spacing between elements. Navigation is a minimal top bar, suggesting a focus on content discovery within the page.

## Imagery

The site uses a mix of high-quality product photography and lifestyle imagery. Product shots are typically tight crops on clean or subtly textured backgrounds, focusing on the item itself. Lifestyle photos are staged, often featuring hands interacting with products or conveying a sense of aspiration. Imagery is typically contained within content blocks, without full-bleed or overlapping treatments. Icons are minimal, outlined, and monochromatic, primarily serving functional UI purposes like search or navigation rather than decorative illustration. The overall density is balanced, allowing images to punctuate text sections without overwhelming the content.

## Similar Brands

| Business | Why |
| --- | --- |
| Wirecutter | Editorial content layout with strong serif/sans-serif pairing and clean, contained imagery. |
| Gear Patrol | Focus on product reviews, clean design with clear content blocks, and subtle accent colors for interaction. |
| Food52 | Use of high-quality photography, structured content, and distinct typography to create an editorial feel. |
| The Strategist (NYMag) | Emphasis on product recommendations within an article format, simple UI, and consistent article card patterns. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #fbfbf7
border: #000000
accent: #2ea3f2
primary action: #2ea3f2 (outlined action border)

Example Component Prompts:
1. Create an Outlined Primary Action: Transparent background, #2ea3f2 border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.
2. Design a blog article card: Transparent background, no border-radius. Headline in Graphik weight 500 at 24px, #000000. Body text in Graphik weight 400 at 16px, #1a202c.
3. Implement an input field: Transparent background, 1px Silver Ash (#767676) border. Placeholder text in Graphite (#1f2937), Graphik font, 16px.
4. Create a prominent section header: Text 'Well Hello There' in Qwitcher Grypen weight 400 at 60px, color Twilight Violet (#454ad3).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521271628-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521271628-thumb.jpg |
