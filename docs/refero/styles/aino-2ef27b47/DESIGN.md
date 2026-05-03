# Aino — Refero Style

- Refero URL: https://styles.refero.design/style/2ef27b47-36b6-46a3-b325-512bccc76abc
- Site URL: https://aino.agency
- ID: 2ef27b47-36b6-46a3-b325-512bccc76abc
- Theme: light
- Industry: agency
- Created: 2026-03-12T17:30:05.000Z
- Ranks: newest: 1046, popular: 248, trending: 152

> Terminal aesthetic, ASCII art

## Description

This design system is a monochrome canvas, evoking the disciplined aesthetic of programming and terminal UIs. It's built on a stark contrast of near-black text on a creamy, soft white background. The most distinctive choice is the pixel-perfect recreation of ASCII art across the page, transforming what might be seen as technical constraints into a primary visual element. This creates a raw, almost deconstructed feel, prioritizing technical expression over traditional graphic design flourishes, making the site itself an artifact of agentic engineering.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Greige Canvas | #f5f5ff | neutral | Page background — a soft, warm white that prevents the harshness of pure white while still providing high contrast for text. |
| Inkwell | #181818 | neutral | Primary text, navigation items, borders, and the core color for the ASCII-art graphics and interactive elements. Its near-black value offers strong readability against the Greige Canvas. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| abcplus | IBM Plex Mono | 400, 500 | 13px | 1.29 | Used for navigation, buttons, and most general purpose text. The distinct letter spacing contributes to its terminal-like appearance. |
| abc | IBM Plex Mono | 720 | 13px | 1.29 | The boldest weight of this custom typeface, used for body text elements that need to stand out within the general text flow. |
| mono | Space Mono | 400 | 13px | 1.29 | A distinct mono font, likely used for specific code-like or technical elements to differentiate them from the primary text. |

## Spacing & Shape

```json
{
  "radius": {
    "all": "0px"
  },
  "elementGap": "16px",
  "sectionGap": "49px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Bar



### ASCII Art Hero Block



### Button Group / CTA Strip



### Navigation Link

**Role:** Interactive element

Text link using `abcplus` font, 13px size, weight 400 or 500, `Inkwell` color, no background, and no border. Active state is subtly indicated by the cursor.

### Primary Button

**Role:** Interactive element

Primarily decorative, uses `abcplus` font, 13px size, weight 400 or 500, `Inkwell` for text and border, no background, and 0px border-radius. Padding is explicitly 0px, suggesting a text-like button within the ASCII art context.

## Do's

- Prioritize `Greige Canvas` (#f5f5f0) for all page and section backgrounds to maintain the light, soft base.
- Use `Inkwell` (#181818) for all text elements to ensure high contrast and consistency.
- Apply `abcplus` 13px, 1.29 line-height, and 0.0430em letter-spacing for primary UI text, including navigation and buttons.
- Utilize 0px border-radius across all elements to enforce the sharp, angular aesthetic.
- Integrate `16px` for internal component padding and spacing between discrete elements and `49px` for larger section-level vertical separation.
- Emphasize the custom ASCII art as a primary decorative and structural element, using it to define sections or visual motifs.

## Don'ts

- Do not introduce any saturated colors; maintain the strictly achromatic palette of `Greige Canvas` and `Inkwell`.
- Avoid rounded corners or any soft geometrical shapes; enforce 0px radius for all borders and elements.
- Do not use box-shadows or gradients for elevation; depth and separation are achieved purely through line art and spacing.
- Do not vary font sizes extensively; keep most text at `13px` with consistent line-height and letter-spacing.
- Avoid large hero images or photographic elements; the visual language is based on text and ASCII-style graphics.
- Do not alter the `0.0430em` letter-spacing of the `abcplus` or `abc` fonts, as it's critical to the terminal aesthetic.

## Layout

The page model is full-bleed with no discernible max-width container, allowing the ASCII art to span the entire viewport. The hero section features a prominent, centered ASCII art graphic with navigation links sparsely placed around it. Section rhythm is driven by the large, continuous ASCII art patterns rather than distinct background color changes or visual dividers. Content, such as navigation, is arranged linearly and subtly within this art. There is no visible grid for content arrangement, instead, elements are positioned freely or minimally centered. The navigation is a classic top-bar with sparse, unstyled text links.

## Imagery

The site's visual language is dominated by ASCII-style art and typographic elements. There is no traditional photography, rich illustrations, or 3D renders. Instead, graphics are composed entirely of text characters (periods, slashes, asterisks, etc.) forming large, abstract patterns and shapes. These 'images' serve a decorative and structural role, rather than depicting objects or scenes. They are full-page or full-section width, integrated directly into the background, and create an intricate, almost code-like texture. Icons, if present, are also character-based.

## Similar Brands

| Business | Why |
| --- | --- |
| Brutalist Websites | Embrace a raw, deconstructed aesthetic based on foundational web elements, often using monochrome palettes and minimal styling. |
| Old School RuneScape UI | Text-heavy interface with strong focus on character-based graphics and a distinct, consistent default typeface for all elements. |
| Terminal.com | Directly leans into a command-line interface aesthetic, using monospace fonts and character-based 'graphics'. |
| Minimal Gallery Sites | Often use large, unstyled type and emphasize a stark black and white aesthetic, letting the primary content be the visual focus. |
| Early Web Designs | Recalls the simplicity and text-based nature of the early internet, where content and structure were often defined by ASCII characters. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #181818 (Inkwell)
- Background: #F5F5F0 (Greige Canvas)
- CTA/Interactive: #181818 (Inkwell, border/text only)
- Border: #181818 (Inkwell)

### 3-5 Example Component Prompts
- Create a top navigation bar: `Greige Canvas` background, full-width. Place text links: 'Aino', 'Work', 'Services', 'About', 'Play', 'Settings', 'Contact' using `abcplus` weight 400, 13px, line-height 1.29, letter-spacing 0.0430em, color `Inkwell` (#181818). Ensure 0px border-radius.
- Generate a primary interactive button: Text 'Settings' using `abcplus` weight 400, 13px, line-height 1.29, letter-spacing 0.0430em, color `Inkwell` (#181818). Background is transparent. Border is 1px solid `Inkwell` (#181818). Padding 0px. Ensure 0px border-radius.
- Build a page section containing body copy: Use `abc` font weight 720, 13px, line-height 1.29, letter-spacing 0.0430em, color `Inkwell` (#181818) on a `Greige Canvas` background. Ensure generous vertical spacing of `49px` between this section and surrounding elements.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925209435-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925209435-thumb.jpg |
