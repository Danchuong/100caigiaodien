# Concrete Club Studio — Refero Style

- Refero URL: https://styles.refero.design/style/f8ab25e8-87c1-4d7b-a633-daf3ea39b916
- Site URL: https://concreteclub.studio
- ID: f8ab25e8-87c1-4d7b-a633-daf3ea39b916
- Theme: mixed
- Industry: agency
- Created: 2026-02-17T19:15:19.000Z
- Ranks: newest: 1170, popular: 521, trending: 916

> Gallery Wall Typography

## Description

This design system evokes a raw, almost deconstructed gallery experience, where content is paramount and design elements serve as subtle frames. The stark contrast between graphic Tangerine Flash and deep neutrals, combined with the unexpected juxtaposition of a classic serif with a minimalist sans-serif, creates a tension that is both playful and sophisticated. The heavy reliance on large, almost architectural typography and minimal component styling puts the focus entirely on the message and visual art direction, creating a distinctive aesthetic that feels both rebellious and highly curated.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, borders, accents on light backgrounds. |
| Onyx Canvas | #212121 | neutral | Dark mode background, contrast element against lighter text. |
| Frost Canvas | #f5f6f5 | neutral | Hero background, general background surfaces. |
| Gallery White | #ffffff | neutral | General background, text on dark surfaces. |
| Tangerine Flash | #d9462b | brand | Brand accent, prominent headings, interactive states – a vibrant statement against muted backgrounds. |
| Rose Bloom | #e296bb | accent | Ephemeral background element; suggests a soft, temporary stage. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| TRJN DaVinci | Georgia Pro | 400 | 14px, 16px, 300px | 1.14, 1.19 | Display headings and primary content; its unique serifs and tight letter spacing at large sizes give the brand its distinct voice. |
| HelveticaNeue-Light | Helvetica Neue | 400 | 26px, 48px, 112px | 1.15 | Navigation, subtle branding elements, and large-scale, airy headlines; provides a modern counterpoint to the more classic serif. |
| Neue Montreal | Inter | 400 | 12px | 1.17 | Body text and small informational snippets; its neutral presence supports the more expressive display fonts. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.17 |  |
| body | 14 | 1.19 | -0.42 |
| body-lg | 16 | 1.19 | -0.48 |
| subheading | 26 | 1.15 |  |
| heading | 48 | 1.15 |  |
| heading-lg | 112 | 1.15 |  |
| display | 300 | 1.14 | -9 |

## Spacing & Shape

```json
{
  "radius": {
    "elements": "0px"
  },
  "elementGap": "",
  "sectionGap": "",
  "cardPadding": "30px",
  "pageMaxWidth": null
}
```

## Components

### Hero Display Text Block



### Dark Story Section Block



### Ghost Navigation Header



### Ghost Navigation Link

**Role:** Primary navigation elements

Styled as a `button` with `backgroundColor: rgba(0, 0, 0, 0)`, `color: rgb(0, 0, 0)`, `borderTopColor: rgb(0, 0, 0)`, `borderRadius: 0px`, `padding: 0px`. Uses HelveticaNeue-Light 26px for subtle presence.

### Hero Display Text

**Role:** Main page headline

TRJN DaVinci 300px, weight 400, lineHeight 1.14, letterSpacing -0.03em. Commands attention with massive scale.

### Section Heading

**Role:** Secondary section titles

TRJN DaVinci 48px, weight 400, lineHeight 1.14, letterSpacing -0.03em. Maintains the brand's serif voice at a more manageable size.

### Informational Text Block

**Role:** Contextual details and metadata

Neue Montreal 12px, weight 400, lineHeight 1.17. Provides unobtrusive body copy.

## Do's

- Prioritize TRJN DaVinci for all headlines and brand-critical text, ensuring its unique character defines the typography.
- Use Tangerine Flash (#d9462b) sparingly as a high-impact accent, primarily for interactive elements or key brand statements.
- Maintain raw, unpadded button styles with `padding: 0px` and `borderRadius: 0px` for a minimalist, boundary-pushing feel.
- Employ Frost Canvas (#f5f6f5) or Gallery White (#ffffff) as dominant background surfaces to provide a crisp, gallery-like setting for content.
- Utilize large spacing values like `230px` for `sectionGap` to break content and create significant visual breathing room between major sections.

## Don'ts

- Avoid using generic button styles or heavy paddings; interaction cues are minimal and baked into the content itself.
- Do not introduce additional border radii; the design relies on sharp edges (`0px`) for its distinctive aesthetic.
- Refrain from adding elevation or shadows to components; the system relies on stark color contrast and inherent typography for hierarchy.
- Do not introduce additional font families or weights beyond the defined HelveticaNeue-Light, TRJN DaVinci, and Neue Montreal.
- Avoid over-saturating the layout with Tangerine Flash (#d9462b); its impact comes from its scarcity.

## Layout

The page model is full-bleed, using the entire viewport width, with content often centered but without a strict max-width container, allowing for vast negative space. The hero sections are typically monoscape, dominated by large, centered typography or a single graphic element against a solid color background. Sections often create a distinct rhythm by alternating between light (Frost Canvas) and dark (Onyx Canvas) backgrounds. Content arrangement is typically centered or uses a simple, stark block layout, with abundant `sectionGap` (230px) creating significant vertical separation. The navigation is a minimalist top-right cluster of text links, appearing as 'ghost' elements. The overall density is very spacious, emphasizing individual elements rather than dense information.

## Imagery

The visual language is characterized by sparse, line-art or sketch-style illustrations that are organic and slightly whimsical, appearing mostly in white on dark backgrounds or as outlines. They function as decorative accents or subtle contextual hints rather than central content. Photography is absent, replaced by abstract, graphic elements such as colored backgrounds (e.g., Rose Bloom) or playful, deconstructed textual compositions. The imagery is highly stylized, never realistic, and always serves to complement the strong typographic statements, often with a raw, unfinished quality. Icons, if present, align with the line-art aesthetic.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA Journal | Uses large display typography and a minimal color palette with strong accent colors for a bold, editorial feel. |
| Certain graphic design portfolios | Employs an experimental, deconstructed aesthetic with custom typefaces and minimal component styling. |
| Independent art galleries | Focuses on content as art, using stark backgrounds and dramatic typography to frame works rather than adorn them. |
| Early 2000s experimental web design | Embraces a raw, almost 'anti-design' sensibility with unusual type pairings and a rejection of conventional UI patterns. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Text (Midnight Ink):** `#000000`
- **Background (Frost Canvas):** `#f5f6f5`
- **Accent (Tangerine Flash):** `#d9462b`
- **Dark Background (Onyx Canvas):** `#212121`
- **Ephemeral Accent (Rose Bloom):** `#e296bb`

### Example Component Prompts
1. **Create a Hero Section:** Set background to Rose Bloom (`#e296bb`). Place 'Concrete' in TRJN DaVinci 300px, weight 400, `#d9462b` color, lineHeight 1.14, letterSpacing -0.03em, centered vertically and horizontally. Add a subtle line-art illustration element to its right.
2. **Design a Navigation Block:** Position at top right. Include three text links: 'Studio', 'Contact', 'Blog'. Each link uses HelveticaNeue-Light 26px, weight 400, `#000000` color, `padding: 0px`, `borderRadius: 0px`. Separate links by a small gap (elementGap).
3. **Generate a Dark Text Section:** Set background to Onyx Canvas (`#212121`). Include a main heading 'Concrete Club' using TRJN DaVinci 48px, weight 400, `#ffffff` color, letterSpacing -0.03em. Below it, add a short descriptive paragraph 'The Concrete Club is a collaboration based creative freelance collective founded by Gaétan Pautler.' using Neue Montreal 12px, weight 400, `#ffffff` color, lineHeight 1.17.
4. **Create a Body Text Paragraph:** Use Gallery White (`#ffffff`) as background. The text should be 'Concrete club Paris, Worldwide' using Neue Montreal 12px, weight 400, `color: #000000`, lineHeight 1.17. Ensure ample `sectionGap` (230px) above and below.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925298318-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925298318-thumb.jpg |
