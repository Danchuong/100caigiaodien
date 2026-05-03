# Acolorbright — Refero Style

- Refero URL: https://styles.refero.design/style/6738c8ec-0e5b-4533-8901-1297aebd32e1
- Site URL: https://www.acolorbright.com
- ID: 6738c8ec-0e5b-4533-8901-1297aebd32e1
- Theme: light
- Industry: design
- Created: 2026-04-30T03:41:37.374Z
- Ranks: newest: 93, popular: 962, trending: 981

> Gallery Canvas

## Description

Acolorbright employs a sophisticated, minimalist aesthetic, using a clean, monochromatic canvas to highlight content and imagery. Typography is precise and confidently understated, defining hierarchy through size and nuanced weight rather than color. Interactive elements are sparse but clearly defined, often using soft borders and subtle background shifts to indicate affordance. The overall impression is one of grounded professionalism and clarity, with design choices geared towards content presentation and subtle interaction rather than overt brand expression through color.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink | #1a1a1a | neutral | Primary text, prominent headings, borders for structural elements, hero content text |
| Charcoal Mist | #666666 | neutral | Secondary text, muted links, subtle decorative backgrounds, borders for content hierarchy |
| Ash Gray | #999999 | neutral | Tertiary text, button text for ghost buttons, subtle borders |
| Cloud White | #f2f2f2 | neutral | Subtle surface background for alternating sections or distinct content blocks |
| Paper White | #ffffff | neutral | Page background, primary card surfaces, active button backgrounds, selected items |
| Pure Black | #000000 | neutral | Icon fills, some body text, accents in contrast to white surfaces |
| Silver Tone | #e6e6e6 | neutral | Hairline borders, subtle dividers, ghost button borders |
| Deep Graphite | #262626 | neutral | Filled button backgrounds, dark interactive states |
| Vivid Violet | #6a0dad | brand | Background for bold branding blocks and case study thumbnails |
| Lush Green | #a3ff00 | accent | Accent for case study thumbnails, creating visual pop in grids |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| RiformaLLWeb | system-ui | 400 | 12px, 16px, 18px, 24px, 40px | 1.15, 1.20, 1.25 | The primary typeface for all text content, from headings to body text. Its singular 400 weight across all sizes contributes to a consistent, restrained textual presence. The slight negative letter-spacing gives it a refined, tightly-set feel, even at display sizes. |
| Arial |  | 400 | 13px | 1.2 | Arial — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.25 | -0.12 |
| body | 16 | 1.25 | -0.16 |
| subheading | 18 | 1.25 | -0.18 |
| heading | 24 | 1.2 | -0.24 |
| display | 40 | 1.15 | -0.4 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "lists": "8px",
    "images": "12px",
    "buttons": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "64px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Secondary action button for low-priority interactions.

Background: Paper White (#ffffff), Text: Pure Black (#000000), Border: 1px solid Silver Tone (#e6e6e6), Radius: 8px, Padding: 1px top/bottom, 6px left/right. Font: RiformaLLWeb 400, size based on context.

### Filled Button (Dark)

**Role:** Primary action button for important interactions.

Background: Deep Graphite (#262626), Text: Ash Gray (#999999), Border: 1px solid Ash Gray (#999999), Radius: 8px, Padding: 12px top/bottom, 16px left/right. Font: RiformaLLWeb 400, size based on context.

### Feature Card

**Role:** Container for showcasing projects or service areas.

Background: transparent (#00000000), Border: none, Radius: 0px, Padding: 0px. Used in grid layouts with prominent imagery.

### Case Study Thumbnail

**Role:** Visual link to detailed case studies within grids.

Background: Vivid Violet (#6a0dad) or Lush Green (#a3ff00), Text: white (assumed based on screenshot), Radius: 12px, Padding varies by content. Imagery within these has a 12px radius.

### Service Section Header

**Role:** Numbered heading for main content sections.

Text: Ink (#1a1a1a), Font: RiformaLLWeb 400, 40px, Line Height 1.15. Prefixed with a numerical identifier (e.g., '➊') to provide clear section hierarchy.

## Do's

- Use RiformaLLWeb at weight 400 for all text, varying size for hierarchy and setting letter-spacing to -0.01em.
- Maintain a monochromatic palette with Paper White (#ffffff) as the dominant background and Ink (#1a1a1a) for primary text.
- Apply 12px border radius to all images and larger content cards, and 8px to buttons and small list items.
- Utilize Charcoal Mist (#666666) for secondary text and subtle background fills to introduce visual depth without strong contrast.
- Employ Deep Graphite (#262626) for filled buttons when a clear, direct action is needed.
- Structure page content using a consistent 64px vertical gap between main sections.
- Ensure interactive elements are clearly delineated through subtle borders with Silver Tone (#e6e6e6) or background shifts to Deep Graphite (#262626).

## Don'ts

- Avoid introducing additional saturated colors beyond Vivid Violet (#6a0dad) and Lush Green (#a3ff00) as they are reserved for specific brand elements and imagery.
- Do not use heavy shadows or gradients; rely on flat surfaces, clear typography, and subtle borders for hierarchy.
- Refrain from using varied font weights; RiformaLLWeb 400 is the only typeface weight permitted.
- Do not break the clear vertical rhythm of 64px section spacing with arbitrary gaps.
- Avoid overly bold or aggressive calls to action; buttons should be understated but functionally clear.
- Do not use fully justified text; left-align content for a clean reading experience.
- Avoid making content elements look like primary actions when they are not; reserve button styling for explicit interactive elements.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Clean, predominantly monochromatic UI with careful typography and subtle elevation for components. |
| Linear | Focus on high information density, clear typographic hierarchy, and a quiet background palette with functional accents. |
| Framer | Minimalist design approach, strong grid layouts, effective use of whitespace, and controlled application of brand colors. |
| Google Material Design | Emphasis on clear surface levels with minimal shadows and a focus on content through structured layouts and readable typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #1a1a1a
background: #ffffff
border: #e6e6e6
accent: #6a0dad
primary action: no distinct CTA color

Example Component Prompts:
1. Create a primary text header: 'Our Work' in RiformaLLWeb 400 at 40px, Ink (#1a1a1a), letter-spacing -0.01em, line-height 1.15. Place it centered with a 64px top margin.
2. Create a ghost button: Text 'View Details' in RiformaLLWeb 400 16px, Pure Black (#000000). Background is Paper White (#ffffff), with a 1px solid Silver Tone (#e6e6e6) border, and 8px radius. Padding 1px top/bottom, 6px left/right.
3. Create a Case Study Thumbnail card: Background Lush Green (#a3ff00), with a 12px border radius. Include a section for an image which also has a 12px radius, and a title on top of it, in RiformaLLWeb 400 18px and white text. Leave internal padding and specific image details to the agent, assume image is full width of card.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520475123-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520475123-thumb.jpg |
